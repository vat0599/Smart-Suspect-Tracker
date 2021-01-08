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

## Output screenshots and explanation

From the below diagram we can clearly see the spike in the anomaly meter. After various experimentation, the threshold for an anomaly event is set as 0.5. This video clearly crosses the threshold and hence will be classified as an anomaly.

<img src="https://user-images.githubusercontent.com/41820878/103679359-c1d61700-4faa-11eb-8850-aad2966e059d.png">

Along with the classification, we also look at the nearby crime scene for possible suspects, and thus the face detection is applied following crime detection.

Below seen image shows the faces being classified. If a person already has a criminal background, his/her face is mapped with a pre existing database and the name is also displayed in the output. But if a person is new, then his/her name is printed as "Unknown" and stored to the database.

<img src="https://user-images.githubusercontent.com/41820878/103680402-23e34c00-4fac-11eb-9d71-b9a1116b8632.png">

All these data are then stored in a database and linked to a frontend web app which can viewed anytime. The location is already know because we know from which cctv we received the data from. This is shown below.

<img src="https://user-images.githubusercontent.com/41820878/103680346-11691280-4fac-11eb-89e3-877535f634a9.png">
<img src="https://user-images.githubusercontent.com/41820878/103680617-6b69d800-4fac-11eb-8d77-c7848a349625.png">

## Contributions
Do not hesitate to contribute by [filling an issue](https://github.com/vat0599/Smart-Suspect-Tracker/issues) or [a PR](https://github.com/vat0599/Smart-Suspect-Tracker/pulls) !
