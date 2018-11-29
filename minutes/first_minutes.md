# first_minutes

----------
### 1. 회의개요

| 일시    |2018.11.29(목) 22:00~23:00      |
| --------|-------------------------------|
| 참석자  |염희수, 임병준, 이헌우, 김동민, 한승탁|
| 안건    |프로젝트 주제 구상 및 역할 분담   |


### 2. 회의내용

 1. 팀원들의 github 계정을 모두 contributor로 등록

 2. 프로젝트 주제
    - 나의 사진을 명화 스타일로 바꿔주는 웹서버 구축
 
 3. 기능
    - AWS로 구축한 웹페이지에서 실행
    - 사용자는 웹페이지에 자신의 사진을 업로드
    - fast-transfer를 이용해 등록된 사진을 명화로 변환
        - 명화종류 -> 3종류
    - 명화로 변환한 사진은 다운로드 가능

 4. 역할분담
    - AWS 인스턴스 생성 및 스케일링 셋팅 & 요금 관리 - 한승탁
    - 리눅스내 서버 구축(tensorflow & python & fast-transfer 설치 , 웹 서버 설치 ) - 김동민
    - 깃허브 README.md로 회의록 작성 , 웹 디자인 , 발표 PPT - 염희수
    - 보고서 및 과제 제출 관리 , 테스트 , 튜토리얼 작성 , 전체 진행 총괄 - 임병준
    - 웹 페이지 기능 구현 - 이헌우
  
 
 ### 3. 결정사항
 
  1. database가 필요한가? -> 필요하지 않음
  2. 리눅스에 fast-transfer 설치가 가능한가? -> 김동민이 확인할 것
  
### 팀원별 할 일 / 마감일
기말고사를 고려하여 최대한 타이트한 일정입니다. 팀원 여러분 모두 화이팅입니다! 추가적으로 기간내에 불가능하다고 판단되면 미리 말해주기 바랍니다.</br>
- 한승탁
  - AWS 인스턴스 생성 및 캡쳐 : 11.30(금) 23:59 까지
    - 생성 과정은 로그인부터 시작하여 클릭 혹은 엔터 단위로 상세하게 캡쳐하여 캡쳐 파일을 [capture폴더](https://github.com/BJ-Lim/Cloud/tree/master/captures)에 업로드할 것
    - 캡쳐파일의 이름은 instance_01.jpg / instance_11.jpg 등으로 할 것
    - 설치를 진행하는 과정이 캡쳐파일의 숫자(순서)와 일치하도록 정렬할 것
    - instance에 gpu도 설정할 것(처음엔 싼걸로)
    - 접속 확인까지 한 후 접속 방법 / 서버 on 방법을 김동민에게 넘겨줄 것
- 김동민
  - web-server 설치 및 설치과정 캡쳐 : 12.1(토) 23:59 까지
    - 클릭 / 설치 과정을 명령어까지 나올 수 있도록 빠지지 않고 상세하게 캡쳐하여 파일을 [capture폴더](https://github.com/BJ-Lim/Cloud/tree/master/captures)에 업로드할 것
    - 파일명은 다음과 같이 할 것
      - install_web_server_01.jpg / install_web_server_11.jpg
    - 설치를 진행하는 과정이 캡쳐파일의 숫자(순서)와 일치하도록 정렬할 것
    - 설치에 참고할 수 있을만한 사이트를 따로 정리해 놓을 것
    - 설치한 버전을 정리하여 가지고 있을 것
  - tensorflow, (tensorflow-gpu,) python, fast-transfer 설치 및 설치과정 캡쳐 : 12.3(월) 23:59 까지
    - tensorflow 및 python 등은 사전에 검색해보고 버전을 꼭!! 체크한 뒤 설치할 것(버전에 따라 실행이 안되는 경우가 많음)
    - tensorflow-gpu를 설치할 것(기본 버전이 cpu지만 상당히 느림)
    - tensorflow-gpu 설치 과정에서 CUDA / CUDNN이 필요할 수 있음
    - 설치전 fast-style-transfer이 리눅스에서 동작이 가능한지 확인할 것
  - 클릭 / 설치 과정을 명령어까지 나올 수 있도록 빠지지 않고 상세하게 캡쳐하여 파일을 [capture폴더](https://github.com/BJ-Lim/Cloud/tree/master/captures)에 업로드할 것
    - 파일명은 다음과 같이 할 것
      - install_tensorflow_01.jpg / install_tensorflow_11.jpg
      - install_tensorflow(gpu)_01.jpg
      - install_python_01.jpg
      - install_fast_transfer_01.jpg
    - 설치를 진행하는 과정이 캡쳐파일의 숫자(순서)와 일치하도록 정렬할 것
    - 설치에 참고할 수 있을만한 사이트를 따로 정리해 놓을 것
    - 설치한 버전을 정리하여 가지고 있을 것
- 염희수
  - 회의록 작성 : 1회차 작성(완료)
  - 웹 페이지 디자인 : 12.4(화) 23:59 까지
- 이헌우
  - 필요한 웹 페이지 정리 : 12.1(토) 23:59 까지
    - 웹 페이지 구성도를 [README.md](https://github.com/BJ-Lim/Cloud/blob/master/code/README.md) 파일에 정리할 것
  - 웹 기본 페이지 구성 : 12.2(일) 23:59 까지
    - 웹 컴포넌트만 구성하여 염희수에게 넘겨줄 것
  - 웹 페이지 기능 구현 : 12.6(목) 23:59 까지
- 임병준
  - [기획서](https://github.com/BJ-Lim/Cloud/blob/master/reports/proposal.md) 작성(완료)
  - 팀원 역할 부여(완료)
  - 팀원 진행상황 체크 : 계속
  - [tutorial 페이지](https://github.com/BJ-Lim/Cloud/blob/master/tutorial/README.md) 작성
  - 프로젝트 1주차 보고서 제출 : 12.4(화) 10:59 
- 공통
  - 각자 맡은 역할을 진행중에 파일은 바로바로 업로드할 것
    
### ISSUE
- git collaborator 초대시 404 error 발생 (해결 완료)
  - 크롬 브라우저로 접속시 해결됨
 
