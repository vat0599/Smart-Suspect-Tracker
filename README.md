# Smart Suspect Tracker

A smart suspect tracking system used to detect wide range of real world crimes and anomalies in surveillance videos which can aid the police department for efficient and timely response to the crime.

## Steps to follow:

### Initialize Website
- Install XAMPP
- Copy the Web folder to htdocs folder in XAMPP root
- Open XAMPP Control Panel and turn on Apache Server
- Now go to 127.0.0.1/Web or localhost/Web/.
- The website is functional

### Face Detection

- Open the face detection module
- Install all dependencies (face_detection, cv2, etc.)
- Run the module
- You can see updates in the website

### Anomaly Detection

- Download the dataset from https://visionlab.uncc.edu/download/summary/60-data/477-ucf-anomaly-detection-dataset or https://www.dropbox.com/sh/75v5ehq4cdg5g5g/AABvnJSwZI7zXb8_myBA0CLHa?dl=0
- Save in the same target folder
- Change the path files in training.py, testing.py and gui.py
- Run training.py and testing.py consequtively (PS: We have already stored trained model in weights_L1L2.mat so you need not train and test again).
- Run gui.py
- Select the example video from dataset whose c3d features are aready extracted. (A few samples with c3d features already extracted are present in the SampleVideos folder).
