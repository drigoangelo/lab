FROM python:3

RUN pip3 install deepspeech

RUN curl -LO https://github.com/mozilla/DeepSpeech/releases/download/v0.9.3/deepspeech-0.9.3-models.pbmm
RUN curl -LO https://github.com/mozilla/DeepSpeech/releases/download/v0.9.3/deepspeech-0.9.3-models.scorer

# Download example audio files
RUN curl -LO https://github.com/mozilla/DeepSpeech/releases/download/v0.9.3/audio-0.9.3.tar.gz
RUN tar xvf audio-0.9.3.tar.gz

# Transcribe an audio file
#RUN deepspeech --model deepspeech-0.9.3-models.pbmm --scorer deepspeech-0.9.3-models.scorer --audio audio/2830-3980-0043.wav

ENTRYPOINT ["tail", "-f", "/dev/null"]