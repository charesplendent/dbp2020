# 새로 배운 내용
## ** DBP 방법
### 1. 웹 프로그래밍 언어에 SQL 삽입
### 2. SQL 전용 언어 사용
### 3. 일반 프로그래밍 언어에 SQL 삽입
### 4. db 관리 기능과 비주얼 프로그래밍 기능을 지닌 GUI 기반 소프트웨어 개발 도구 사용
## ** 실습 준비
### 오라클 XE 11g R2, SQL Developer, JAVA SE Developer Kit 8u271 (Oracle JDK), Eclipse IDE
## ** JDBC (Java Database Connectivity) 설정하기
### 1. 자바와 db를 연동할 수 있는 API
### 2. JVM의 시스템과 DBMS을 연결하고 통신하고 위한 자바의 표준 스펙
### 3. JDBC 파일은 오라클 설치시 기본으로 제공된다.

# 문제 + 해결
## 모두 정상적으로 하다가 Connection Test부터 막혔다.
## 포트번호도 1521로 같고 코드도 틀린 부분이 없었으며 다른 부분을 모두 강의와 강의자료와 동일하게 했는데도 문제가 생겼다.
## 교수님께 여쭤봤고 환경변수도 조절해주고 강의 자료 코드를 그대로 복사해보기도 했다. 틈틈이 도전했는데 일요일이 되도록 해결할 수 없었다.
## 불편하지만 집에 있는 desktop에 대신 다시 처음부터 설치하게 됐다. (컴퓨터 상태가 복잡해서 안될 줄 알았는데 다행히 됐다.)
## 추측으로는 try the Eclipse installer가 안돼서 Eclipse IDE for Java Developers를 다운받아서 그런 것 같다.
### (installer처럼 처음 설정 화면이 뜨지 않아서 따로 14 download를 할 수 없어서)
## desktop의 포트번호는 1522였고 특별히 막힌 부분은 없었다.

# 참고할 만한 내용
## https://stackoverflow.com/questions/19660336/how-to-approach-a-got-minus-one-from-a-read-call-error-when-connecting-to-an-a
### 문제가 발생했을때 찾아본 자료인데 이걸 통해 해결을 할 수는 없었지만 교수님께서도 같은 링크를 보내주신 걸 보면 유용한 내용이 될 수 있을 것 같다.

# 회고
## - 설치가 안돼서 학기말에 있을 팀플때문에 큰 스트레스를 받았다. Laptop 5월에 처음 샀는데 안되는 것들이 너무 많은 것 같다.
## + 발생한 문제를 해결한 건 아니지만 그래도 다른 컴퓨터에라도 깔 수 있어서 다행이었다.
## ! 힘들었지만 JDBC 등등 알아가게 된 건 많은 것 같다.
