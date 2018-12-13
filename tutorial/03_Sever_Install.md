
# 가상환경에서 웹 서버 설치하기

### 1.관리자 권한으로 로그인

<div>
  <img width="400" src="https://user-images.githubusercontent.com/30786827/49924465-be6e1f80-fef9-11e8-99fa-48e1c2fa27d4.png">
</div>


자신의 계정을 확인해 본 다음, 관리자 권한으로 가기위해 root권한으로 로그인 하는 명령어를 실행합니다.

<div>
  <img width="400" src="https://user-images.githubusercontent.com/30786827/49924568-0e4ce680-fefa-11e8-8dde-d44aadde7134.png">
</div>

루트로 바뀐 것을 확인합니다.

### 2.서버에 설치된 패키지 갱신 및 업그레이드

Apache2라는 웹 서버를 설치하기전에 현재 서버에 설치된 패키지 목록을 갱신하고 최신버전으로 업그레이드 합니다.

<div>
  <img width="400" src="https://user-images.githubusercontent.com/30786827/49924740-64ba2500-fefa-11e8-8b7a-946b4f2b46e3.png">
  
  <img width="400" src="https://user-images.githubusercontent.com/30786827/49924916-cf6b6080-fefa-11e8-97cb-e886d8b4d35e.jpg">
</div>

패키지 갱신과 업그레이드를 했다면 이제 웹 서버를 설치해봅니다.

### 3.Apache2 설치

<div>
  <img width="400" src="https://user-images.githubusercontent.com/30786827/49925001-10fc0b80-fefb-11e8-9c9a-aed234d906ad.jpg">
</div>

설치가 완료되었다면 버전을 확인하여 봅니다.

<div>
  <img width="400" src="https://user-images.githubusercontent.com/30786827/49925044-312bca80-fefb-11e8-8df1-2982220cb922.jpg">
</div>

아파치2 서버 상태를 확인하여 봅니다.

<div>
  <img width="400" src="https://user-images.githubusercontent.com/30786827/49925059-3be65f80-fefb-11e8-8250-f7437874e66d.jpg">
</div>

이제 페이지에 들어가기 위해 php7을 설치합니다.</br>
우리가 하는 ubuntu의 버전은 18.04이므로 php 최신 버전을 설치합니다.

<div>
  <img width="400" src="https://user-images.githubusercontent.com/30786827/49925067-3e48b980-fefb-11e8-97f2-e056939a51fd.jpg">
</div>

그 다음으로, 아파치 모듈과 연동 하기 위해 명령어를 사용 합니다.</br>
php 설치를 한 후 버전이 7.2이므로 7.2를 씁니다.

<div>
  <img width="400" src="https://user-images.githubusercontent.com/30786827/49925071-40127d00-fefb-11e8-9c00-fd297a24a121.jpg">
</div>

웹 서버에서 다국어 처리 모듈을 설치합니다.

<div>
  <img width="400" src="https://user-images.githubusercontent.com/30786827/49925074-4143aa00-fefb-11e8-966e-ff49e94b4956.jpg">
</div>

웹 서버에서 이미지 처리 모듈을 설치합니다.

<div>
  <img width="400" src="https://user-images.githubusercontent.com/30786827/49925077-430d6d80-fefb-11e8-9775-de6bcc03bc2c.jpg">
</div>

추가로 설치하고 싶은 모듈이 있다면

<div>
  <img width="400" src="https://user-images.githubusercontent.com/30786827/49925079-443e9a80-fefb-11e8-8bf2-74f9e9497c6a.jpg">
</div>

이 명령어를 사용하여 사용하고 싶은 모듈을 설치하면 됩니다.

### 4.php 권한 설정

적용을 하기 위해 아파치를 재 시작 합니다. 그 다음 php 버전을 확인합니다.

<div>
  <img width="400" src="https://user-images.githubusercontent.com/30786827/49925080-456fc780-fefb-11e8-9883-e798adb4deb7.jpg">
</div>

그 다음으로 php 권한을 설정합니다.

권한을 설정하는 이유는</br>
웹 서비스 구동시 발생할 수 있는 Nobody 퍼미션 관련 문제를 해결하기 위해 관련 프로그램을 설치합니다.
이 세팅을 하면 shell의 권한, stfp의 권한 web의 권한이 동일하게 취급되며 보안도 좋게 됩니다.

<div>
  <img width="400" src="https://user-images.githubusercontent.com/30786827/49925081-46a0f480-fefb-11e8-9c06-10e44b941f1c.jpg">
</div>

<div>
  <img width="400" src="https://user-images.githubusercontent.com/30786827/49925082-47398b00-fefb-11e8-8ca0-60403bc64ea1.jpg">
</div>

그 다음으로 웹페이지에서 파일업로드 구현을 할 시</br>
이 확장자 파일을 제대로 막아주지 못하면 사이트가 위험해지므로 .php를 제외한 나머지의 접근을 차단해야 합니다.

<div>
  <img width="400" src="https://user-images.githubusercontent.com/30786827/49925083-47d22180-fefb-11e8-8caa-5e9107fabafe.jpg">
</div>

<div>
  <img width="400" src="https://user-images.githubusercontent.com/30786827/49925085-486ab800-fefb-11e8-9a6d-2f216ffe517e.jpg">
</div>

접근을 막기 위해 중간에 코드를 추가합니다.

<div>
  <img width="400" src="https://user-images.githubusercontent.com/30786827/49925088-49034e80-fefb-11e8-91e1-db1ed49b7c65.jpg">
</div>

<div>
  <img width="400" src="https://user-images.githubusercontent.com/30786827/49925089-499be500-fefb-11e8-92cb-2ac47b3172ad.jpg">
</div>

적용을 위해 아파치를 재 시작합니다.

### 5.포트 추가 및 접속 확인

<div>
  <img width="400" src="https://user-images.githubusercontent.com/30786827/49925090-4acd1200-fefb-11e8-823c-f821ff487caa.jpg">
</div>

그 다음, 퍼블릭 ip에 외부에서도 접속을 할 수 있게 아마존 인스턴스에서 포트 추가를 하고 설정해줍니다.

<div>
  <img width="400" src="https://user-images.githubusercontent.com/30786827/49925092-4bfe3f00-fefb-11e8-9a23-765b26066ed3.jpg">
</div>

Public IP로 접속하여 접속이 가능한 것을 확인할 수 있습니다.

<div>
  <img width="400" src="https://user-images.githubusercontent.com/30786827/49925094-4c96d580-fefb-11e8-8690-a4f98755b483.jpg">
</div>


