<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" />
    <title>アンケート</title>
</head>

<body>
    <form action="create.php" id="php_form" method="post">
        <fieldset>
            <legend>アンケートページ（入力画面）</legend>
            <a href="read.php">結果一覧</a>
            <div>
                名前 : <input type="text" name="name">
            </div>
            <div>
                email : <input type="text" name="email">
            </div>
            <div>
                年齢:
                <input type="radio" id="age1" name="age" value="0">
                <label for="age1">5 - 25歳</label>
                <input type="radio" id="age2" name="age" value="1">
                <label for="age2">25 - 39歳</label>
                <input type="radio" id="age3" name="age" value="2">
                <label for="age3">40 - 55歳</label>
                <input type="radio" id="age4" name="age" value="3">
                <label for="age4">55 - 67歳</label>
            </div>

            <div>
                一番好きな音楽ジャンルは? :
                <input type="radio" id="genre1" name="genre" value="0">
                <label for="genre1">ポップス</label>
                <input type="radio" id="genre2" name="genre" value="1">
                <label for="genre2">ヒップホップ</label>
                <input type="radio" id="genre3" name="genre" value="2">
                <label for="genre3">ロック</label>
                <input type="radio" id="genre4" name="genre" value="3">
                <label for="genre4">EDM</label>
                <input type="radio" id="genre5" name="genre" value="4">
                <label for="genre5">ジャズ</label>
            </div>
            <div>
                一番好きな料理は? :
                <input type="radio" id="food1" name="food" value="0">
                <label for="food1">中華</label>
                <input type="radio" id="food2" name="food" value="1">
                <label for="food2">和食</label>
                <input type="radio" id="food3" name="food" value="2">
                <label for="food3">イタリアン</label>
                <input type="radio" id="food4" name="food" value="3">
                <label for="food4">メキシカン</label>
                <input type="radio" id="food5" name="food" value="4">
                <label for="food5">インド料理</label>
            </div>
            <div>
                外食はどのぐらいしましすか？:
                <input type="radio" id="travel1" name="travel" value="0">
                <label for="travel1">月１〜２回</label>
                <input type="radio" id="travel2" name="travel" value="1">
                <label for="travel2">週１〜２回</label>
                <input type="radio" id="travel3" name="travel" value="2">
                <label for="travel3">週３回以上</label>
                <input type="radio" id="travel4" name="travel" value="3">
                <label for="travel4">ほぼ毎日</label>
            </div>
            <div>
                <button>Submit</button>
            </div>

        </fieldset>
    </form>
</body>

</html>