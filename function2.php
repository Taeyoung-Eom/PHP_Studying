<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Function</title>
</head>
<body>
    <h1>Function</h1>
    <h2>Basic</h2>
    <?php
        function basic() {
            print("Lorem ipsum dolor1<br>");
            print("Lorem ipsum dolor2<br>");
        }
        basic();
        basic();
        basic();
    ?>
    <h2>Parameter & Argument</h2>
    <?php
    
    function sum($left, $right){    //$left 와 $right라고 하는 변구는 파라미터 라고한다.
        print($left + $right);     //  한국말로는 매개 변수라고 한다.
        print("<br>");
    }
    sum(2,4);     //숫자 2와 4라는 입.력.값  은 아규먼트 라고 한다.
    sum(4,6);
    ?>
    <h2>Return</h2>
    <?php
    function sum2($left,$right){
        return $left+$right;
        echo 234892374;   //함수가 return을 만나면 그밑에 코드는 실행되지 않는다(무시된다).
        // 위에 sum과 다른것은 함수내에 print가 없다.
        //print가있으면 상당히 제한적이다. 그렇지만 ruturn을 사용하면 함수 결과값을 이메일로 보낼수도 혹은 사이트에 업로드 할 수도 혹은 아래와같이 result.txt라는 파일에 저장할 수 도 있게끔 해준다.
    }
    print(sum2(2,4)); //함수내에print를 정의하지 않았기 떄문에 print(함수);를 해야한다.
    file_put_contents('result.txt', sum2(2,4));
    ?>


</body>
</html>