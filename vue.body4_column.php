<?php
/*
  define('DSN','mysql:host=localhost;dbname=vue_demo');
  define('DB_USER','omochidesign_000');
  define('DB_PASSWORD','cqjglXvkxrecLOoX');

  //エラー通知レベル
  error_reporting(E_ALL & ~E_NOTICE);

  //DBに接続する
  $pdo = new PDO (DSN,DB_USER,DB_PASSWORD);

  //商品リストを取得する
  $stmt = $pdo->prepare('SELECT * FROM section4');
  $stmt->execute();
*/

  $pdo = new PDO(
		"mysql:dbname=vue_demo;host=localhost;charset=utf8",
		"omochidesign_000",
		"cqjglXvkxrecLOoX"
	);

	$sql ="select * from section4";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();

  /*
	while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
		$product[]=$result;
	}
*/

  //商品レコードを配列に組み込む
  $products = array();
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    $products[] = array(
      'id' => (int)$row['id'],
      'name' => $row['name'],
      'price' => (int)$row['price'],
      'image' => $row['image'],
      'delv' => (int)$row['delv'],
      'isSale' => (boolean)$row['isSale']
    );
  }

  echo "<pre>";
  echo "\n";
  var_dump($products);
  echo "</pre>";
  echo "\n\n";

  //PHPの配列をJSONに変換
  $json = json_encode($products,JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

  //JSONを出力
  header("Content-Type: application/json");
  echo $json;
?>
