## 개요
우리가 웹 서버를 사용할 때는 www-data라는 유저의 권한으로 프로그램을 실행하도록 되어있습니다.</br>
그런데 보안상의 이유로, 실행중에는 www-data의 환경 변수를 설정할 수 없습니다. </br>
따라서 우리는 www-data의 환경변수를 미리 셋팅해 놓을 것입니다.</br>

## 설명
우리는 가상 환경(virtual environment)을 사용하여 fast-style-transfer이 작동하도록 만들 것입니다.</br>
따라서 ubuntu 계정으로 접속하여 가상 환경에 사용되는 환경변수를 복사하고, www-data가 실행될 때 이 환경변수를 가질 수 있도록 하는 것이 목표입니다.
1. **ubuntu에서 가상환경 확인하기**</br>
    서버에 처음 접속하면 다음과 같은 화면을 볼 수 있습니다.</br>
    ![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/env_01.JPG)</br>
    우리는 오른쪽의 명령어로 왼쪽의 가상환경을 실행할 수 있습니다.</br></br>
2. **가상환경 시작하기**</br>
    다음과 같이 입력합니다.
    ```
    source activate amazonei_ensorflow_p27 
    ```
    입력이 완료되면 다음과 같은 화면을 볼 수 있습니다.</br>
    이 환경이 처음 실행되는 경우 몇몇 파일들을 설치할 수 있습니다.</br>
    ![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/env_02.JPG)</br></br>
3. **환경변수 복사하기**</br>
    다음과 같이 입력합니다.
    ```
    echo $PATH
    ```
    다음과 같이 환경 변수 부분을 복사합니다.
    ![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/env_03.JPG)</br></br>
 4. **환경변수 붙여넣기**</br>
    다음과 같이 입력합니다.
    ```
    sudo vi /etc/apache2/envvars
    ```
    입력 후 `j`를 계속 눌러 커서를 맨 아래로 이동합니다. 그 다음 `o`를 눌러 새로운 라인에 입력을 시작합니다. 다음과 같이 입력합니다.
    ```
    export PATH=[붙여넣기]
    ```
    입력이 완료되면 다음과 같습니다.</br>
    ![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/env_04.JPG)</br></br>
    다음과 같이 입력해서 저장하고 종료합니다.
    ```
    :wq                     모두 입력한 뒤 Enter를 눌러야 합니다.
    ```
5. **서비스 재시작 하기**</br>
    다음과 같이 입력합니다.
    ```
    sudo service apache2 restart
    ```
    이제 웹 서버가 실행되면서 www-data는 실행될 때 마다 ubuntu가 activate한 환경과 동일한 환경 변수를 가질 것입니다.

## 다음
5. [데모 해보기](https://github.com/BJ-Lim/Cloud/blob/master/tutorial/05_demo.md)
