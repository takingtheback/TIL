# Today I Learned
### 2022-06-06 recording start
### FrontEnd Area Plan
HTML5 - process  
CSS3  - process  
JavaScript  - process  
Typescript  - Not yet      
함수형 언어  - Not yet       
SPA 구현 RESTful 아키텍처 경험  - Not yet      
React Vue Angular  - Not yet   
React - Redux  - Not yet   
Graphql  - Not yet   
  
**강의** : HTML+CSS+JS 포트폴리오 실전 Session2 - process   

### General Plan  
Data Structure - Not yet      
OOP  - Not yet   
Database  - Not yet   
Algorithm  - Not yet   
Network  - Not yet   

### PHP plan  
- WordPress GeneratePress & PHP 이용해 blog 제작
- WordPress LMS 구축 후 플러그인 조립만으로 한계를 느낌  
  
**교제** : 그누위즈의 PHP & MySQL 웹 프로그래밍 입문 + 활용  - process   
**강의** : 워드프레스 제대로 개발하기 - 어드민, 클라이언트 - 안형우 - Not yet   


# Issue 
**220614** : **GitHub DeskTop**   
프로그램 응답없음 오류시 커밋 Push 오류  
    
**220617** : **PHP**    
16:50:26  [Apache] Error: Apache shutdown unexpectedly.  
1. port 설정 문제로 판단 ->  https://themeisle.com/blog/xampp-error-apache-shutdown-unexpectedly/  참고 후 포트 변경 -> 실패  
2. DocumentRoot 문제로 판단 -> http.conf > DocumentRoot 설정 변경 했으나 실패  
3. 그누위즈 교재 p67 php.ini 설정값 변경 시 오류 발생 확인 > 설정 값 변경없이 작업 진행 

**220621** : **input type number css 삭제**
input[type=number] {
    -moz-appearance: none;
}
코드만으로 삭제가 안됨   
input[type=number]::-webkit-outer-spin-button, 
input[type=number]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}
input[type=number] {
    -moz-appearance: none;
}
