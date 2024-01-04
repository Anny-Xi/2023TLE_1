navigator.getUserMedia = navigator.getUserMedia
    || navigator.webkitGetUserMedia
    || navigator.mozGetUserMedia;

navigator.getUserMedia({ video : false, audio : true }, callback, console.log);


function callback(stream) {
    let ctx = new AudioContext();
    let mic = ctx.createMediaStreamSource(stream);
    let analyser = ctx.createAnalyser();
    let osc = ctx.createOscillator();

    mic.connect(analyser);
    osc.connect(ctx.destination);
    osc.start(0);

    let data = new Uint8Array(analyser.frequencyBinCount);

    function play() {
        analyser.getByteFrequencyData(data);

        // get fullest bin
        let idx = 0;
        for (let j=0; j < analyser.frequencyBinCount; j++) {
            if (data[j] > data[idx]) {
                idx = j;
            }
        }

        let frequency = idx * ctx.sampleRate / analyser.fftSize;
        console.log(frequency);
        osc.frequency.value = frequency;

        requestAnimationFrame(play);
    }

    play();
}
