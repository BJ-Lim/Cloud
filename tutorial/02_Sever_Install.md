
# 가상환경에서 웹 서버 설치하기

### 1.관리자 권한으로 로그인

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/Install_WebServer/install_web_server_01.jpg)</br></br>


자신의 계정을 확인해 본 다음, 관리자 권한으로 가기위해 root권한으로 로그인 하는 명령어를 실행합니다.

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/Install_WebServer/install_web_server_02.jpg)</br></br>

루트로 바뀐 것을 확인합니다.

### 2.서버에 설치된 패키지 갱신 및 업그레이드

Apache2라는 웹 서버를 설치하기전에 현재 서버에 설치된 패키지 목록을 갱신하고 최신버전으로 업그레이드 합니다.

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/Install_WebServer/install_web_server_03.jpg)</br></br>

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/Install_WebServer/install_web_server_04.jpg)</br></br>

패키지 갱신과 업그레이드를 했다면 이제 웹 서버를 설치할 차례입니다.

### 3.Apache2 설치

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/Install_WebServer/install_web_server_05.jpg)</br></br>

설치가 완료되었다면 버전을 확인하여 봅니다.

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/Install_WebServer/install_web_server_06.jpg)</br></br>

아파치2 서버 상태를 확인하여 봅니다.

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/Install_WebServer/install_web_server_07.jpg)</br></br>

이제 페이지에 들어가기 위해 php7을 설치합니다.</br>
우리가 하는 ubuntu의 버전은 18.04이므로 php 최신 버전을 설치합니다.

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/Install_WebServer/install_web_server_08.jpg)</br></br>

그 다음으로, 아파치 모듈과 연동 하기 위해 명령어를 사용 합니다.</br>
php 설치를 한 후 버전이 7.2이므로 7.2를 씁니다.

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/Install_WebServer/install_web_server_09.jpg)</br></br>

웹 서버에서 다국어 처리 모듈을 설치합니다.

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/Install_WebServer/install_web_server_10.jpg)</br></br>

웹 서버에서 이미지 처리 모듈을 설치합니다.

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/Install_WebServer/install_web_server_11.jpg)</br></br>

추가로 설치하고 싶은 모듈이 있다면

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/Install_WebServer/install_web_server_12.jpg)</br></br>

이 명령어를 사용하여 사용하고 싶은 모듈을 설치하면 됩니다.

### 4.php 권한 설정

적용을 하기 위해 아파치를 재 시작 합니다. 그 다음 php 버전을 확인합니다.

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/Install_WebServer/install_web_server_13.jpg)</br></br>

그 다음으로 php 권한을 설정합니다.

권한을 설정하는 이유는</br>
웹 서비스 구동시 발생할 수 있는 Nobody 퍼미션 관련 문제를 해결하기 위함 입니다.
이 세팅을 하면 shell의 권한, stfp의 권한 web의 권한이 동일하게 취급되며 보안 측면에서도 더 우수합니다.

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/Install_WebServer/install_web_server_14.jpg)</br></br>

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/Install_WebServer/install_web_server_15.jpg)</br></br>

그 다음으로 웹페이지에서 파일업로드 구현을 할 시</br>
이 확장자 파일을 제대로 막아주지 못하면 사이트가 위험해지므로 .php를 제외한 나머지의 접근을 차단해야 합니다.

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/Install_WebServer/install_web_server_16.jpg)</br></br>

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/Install_WebServer/install_web_server_17.jpg)</br></br>

접근을 막기 위해 중간에 코드를 추가합니다.

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/Install_WebServer/install_web_server_18.jpg)</br></br>

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/Install_WebServer/install_web_server_19.jpg)</br></br>

적용을 위해 아파치를 재시작합니다.

### 5.포트 추가 및 접속 확인

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/Install_WebServer/install_web_server_20.jpg)</br></br>

그 다음, 퍼블릭 ip에 외부에서도 접속을 할 수 있게 아마존 인스턴스에서 포트 추가를 하고 설정해줍니다.

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/Install_WebServer/install_web_server_21.jpg)</br></br>

Public IP로 접속하여 접속이 가능한 것을 확인할 수 있습니다.

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/Install_WebServer/install_web_server_22.jpg)</br></br>

## 다음

3. [파일 ](https://github.com/BJ-Lim/Cloud/blob/master/tutorial/03_move_files.md)
