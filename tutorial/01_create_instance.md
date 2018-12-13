## 개요
- 이 과정은 인스턴스를 생성하고 인스턴스에 접속하는 과정입니다.
- 인스턴스에 접속하기 위해서는 PuTTY가 필요합니다.

## 인스턴스 생성에 앞서
해당 인스턴스는 프리티어로는 생성할 수 없기 때문에 우선 지원 신청을 해야합니다.
![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/setup_01.jpg)</br>
AWS Management Console 화면의 우측 상단 지원 탭에 있는 '지원 센터'를 클릭합니다.
![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/setup_02.jpg)</br>
지원 센터에서 'Create case'버튼을 눌러 작성 화면으로 넘어갑니다.
![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/setup_03.jpg)</br>
'Service Limit Increase'를 선택하고 'EC2 Instances'를 선택한 후 자신이 생성할 지역과 운용할 인스턴스 타입을 선택하여 작성합니다.

신청에 대한 응답은 약 5~10분 정도 소요됩니다.

## 인스턴스 생성
AWS 서비스의 EC2 항목으로 들어갑니다.

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/instance_01.PNG)</br>
우측 상단의 서비스를 운영할 지역을 선택하고 대시보드를 확인합니다.</br>
하단의 서비스 상태 항목을 통해 어느 지역에 생성할지 확인할 수 있습니다.

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/instance_00.PNG)</br>
이번엔 좌측 화면의 키페어 항목을 클릭합니다.</br>
인스턴스 생성에는 키페어가 필요하기 때문에 키페어 생성 버튼을 누르고 키페어의 이름을 입력합니다.</br>
키페어가 생성되면 저장하고 위치를 꼭 기억합니다.

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/instance_01.PNG)</br>
다시 대시보드로 돌아와 인스턴스 시작 버튼을 선택합니다.

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/Select_AMI.png)</br>
좌측 메뉴에서 'AWS Marketplace'를 선택하고 'machine learning ami'를 검색하여 'Deep Learning AMI (Ubuntu)'를 선택합니다.

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/instance_03_t2.PNG)</br>
인스턴스 유형을 선택하고 아래의 검토 및 시작 버튼을 클릭합니다.

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/instance_08_t2.PNG)</br>
검토화면에서 자신이 선택한 인스턴스와 AMI가 맞는지 확인하고 시작버튼을 클릭니다.

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/instance_09_t2.PNG)</br>
키 페어 선택 화면에서 기존 키 페어 선택 후 이전단계에서 생성한 키 페어를 선택합니다.

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/instance_10.PNG)</br>
인스턴스 시작 화면에서 인스턴스 보기 버튼을 클릭니다.

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/instance_11_t2.PNG)</br>
인스턴스 관리 화면입니다.</br>
인스턴스 상태가 running이 되면 인스턴스가 작동하고 있는 것입니다.</br>
인스턴스에 접속하기 위해서는 주소가 필요합니다.</br>
하단의 퍼블릭 DNS(IPv4)의 주소를 기억하거나 메모합니다.</br>

## 인스턴스 접속
![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/instance_12.PNG)</br>
인스턴스에 접속하기 위해 PuTTY에 포함된 puttygen.exe을 통해 private key를 생성해야 합니다.

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/instance_13.PNG)</br>
화면의 로드버튼을 클릭합니다.

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/instance_14.PNG)</br>
저장된 키 페어를 찾아 선택합니다.

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/instance_15.PNG)</br>
확인 버튼을 눌러준 후

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/instance_17.PNG)</br>
'Save private key'를 선택합니다.

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/instance_18.PNG)</br>
생성된 키를 저장합니다.

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/instance_19.PNG)</br>
PuTTY를 실행시켜 Host Name에 퍼블릭 DNS를 입력하고

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/instance_20.PNG)</br>
Connection > SSH > Auth항목을 선택하여 Private key 'Browse...'버튼을 선택합니다.

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/instance_22.PNG)</br>
puttygen을 사용하여 생성한 private key를 선택합니다.

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/instance_23.PNG)</br>
다시 Session으로 돌아와 설정을 저장할 이름을 작성하고

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/instance_24.PNG)</br>
Save버튼을 눌러 저장해 줍니다.</br>
이후 다시 접속할 때에는 저장된 설정을 로드하여 접속하면 됩니다.

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/instance_25.PNG)</br>
Open버튼을 클릭하면 login as: 화면이 뜹니다.</br>
기본 설정인 ubuntu를 입력합니다.

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/instance_26.PNG)</br>
다음과 같은 화면이 나오면 성공적으로 접속된 것입니다!

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/instance_27.PNG)</br>
사용을 끝마쳤으면 인스턴스 항목으로 돌아가 인스턴스를 선택한 후 작업탭에서 인스턴스 상태 > 정지를 선택합니다.

![Style Images](https://github.com/BJ-Lim/Cloud/blob/master/captures/instance_Stopped.PNG)</br>
인스턴스 상태에 stopped라고 나온다면 성공적으로 정지된 것입니다.</br>
인스턴스를 켜놓을 경우 사용하지 않더라도 과금될 수 있기 때문에 사용이 끝나면 꼭 꺼야합니다.

## 다음
2. [파일 옮기기](https://github.com/BJ-Lim/Cloud/blob/master/tutorial/02_move_files.md)
