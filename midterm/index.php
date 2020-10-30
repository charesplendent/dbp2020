<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> World Information System </title>
    <style>
    body{
      background-color: lightcyan
    }
    </style>
</head>

<body>

    <h1> 기본 조회 시스템</h1>
    <form action="country.php" method="POST">
        <h3>1) 나라 조회 </h3>
         나라를 입력하세요. <input type="text" name="Name" placeholder="국가명 입력">
         <input type="submit" value="GO">
    </form>
    <form action="continent.php" method="POST">
          <h3>2) 대륙 조회 </h3>
        <input type="radio" name="area" value = "city" checked> 도시
        <input type="radio" name="area" value = "country"> 나라
         <select name ="Continent"> 대륙
         <option value = 'Asia'>Asia</option>
         <option value = 'Oceania'>Oceania</option>
         <option value = 'Europe'>Europe</option>
         <option value = 'North America'> North America</option>
         <option value = 'South America'> South America</option>
         <option value = 'Africa'>Africa</option>
       </select>

        <input type="submit" value="GO">
    </form>

    <h1> 언어 / 도시 / 코드 </h1>
    <form action="language.php" method="POST">
        <h3>1) 언어 알아보기 </h3>
         언어를 입력하세요. <input type="text" name="name" placeholder="언어 입력">
         <input type="submit" value="GO">
    </form>
    <form action="city.php" method="POST">
      <h3>  2) 도시 위치 찾기 </h3>
         도시를 입력하세요. <input type="text" name="Name" placeholder="도시 입력">
         <input type="submit" value="GO">
    </form>
    <form action="all.php" method="POST">
      <h3>  3) 모든 국가 코드 확인 <input type="submit" value="SEARCH"> </h3>
    </form>
</body>
</html>
