## 개요
이 프로젝트를 그대로 구현하기 위해서는 필요한 파일을 AWS Instance로 옮길 필요가 있습니다.

## 방법
먼저 fast-style-transfer과 pretrained-network가 필요합니다.
근데 이 파일들의 용량이 크기 때문에, 쉽게 파일을 instance로 옮기기 어렵습니다. 예를 들면, 깃허브로 파일을 옮기는 것은 불가능합니다.
용량이 큰 파일을 윈도우에서 리눅스로 옮기는 방법은 여러가지가 있는데, 그 방법들을 소개합니다.
  1. 윈도우 FTP 서버를 구축한 후 리눅스에서 다운받는 방법
  2. VirtualBox를 사용하여 공유 폴더를 이용해서 윈도우에서 VirtualBox 리눅스로 파일을 전송하고, 리눅스에서 instance로 파일을 전송하는 방법</br>
  
우리는 2번의 방법을 사용합니다.

## 설명
1. VirtualBox에서 공유 폴더 설정을 하려면 [여기](http://noota.tistory.com/entry/%EB%B2%84%EC%B6%94%EC%96%BC%EB%B0%95%EC%8A%A4VirtualBox-%EA%B3%B5%EC%9C%A0%ED%8F%B4%EB%8D%94-%EC%82%AC%EC%9A%A9%ED%95%98%EA%B8%B0-HostWindows-GuestUbuntuLinux)를 클릭합니다.
2. 공유폴더에 개인키 파일을 옮깁니다.(.pem 파일)
3. 필요한 파일을 공유폴더로 옮깁니다. 예를 들면 다음과 같을 수 있습니다.
  ![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/move_02.JPG)</br></br>
  ```cmd.sh```는 다음과 같습니다.</br>
  ![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/move_03.JPG)</br></br>
  
  ```sample.jsp```는 임의의 사진입니다.</br>
  fast-style-transfer에 관련된 파일은 [여기](https://github.com/ShafeenTejani/fast-style-transfer/blob/master/README.md)에서 받을 수 있습니다.</br>

4. 폴더를 전송합니다. 명령어는 다음과 같습니다.
  ```
  scp                             파일을 전송하는 리눅스 명령입니다.
  -i Project.pem                  공개키 기반 암호화를 이용하는 파일입니다.
  -p                              전송하는 모든 파일의 권한을 변경하지 않고 유지합니다.
  -r fst                          fst 폴더의 하위 모든 항목이 이동하도록 합니다.
  ubuntu@ec2-...com/home/ubuntu   해당 instance에 접속시 부여된 주소에 :[파일이 전송될 위치]를 붙입니다.
  ```
  ![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/move_01.JPG)</br></br>
  
## 코드

웹 서버를 구축하기 위해 우리가 만든 코드를 서버로 옮겨야 합니다. 다음 명령을 실행합니다.

```
cd /var/www/html/
```
이어서 다음 명령을 실행합니다.
```
sudo wget https://raw.githubusercontent.com/BJ-Lim/Cloud/master/code/upload.php https://raw.githubusercontent.com/BJ-Lim/Cloud/master/code/download.php</br> https://raw.githubusercontent.com/BJ-Lim/Cloud/master/code/styles.css https://raw.githubusercontent.com/BJ-Lim/Cloud/master/code/index.html
```

## 다음
4. [웹 서버 설치](https://github.com/BJ-Lim/Cloud/blob/master/tutorial/04_set_envs.md)
