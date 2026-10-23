<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>Confirm</title>
</head>
<body>
<?php
$age = $_POST["age"] ?? "";

if ($age === "" || filter_var($age, FILTER_VALIDATE_INT) === false || (int)$age < 0 || (int)$age > 150) {
        exit("Age must be between 0 and 150.");
}
$name = $_POST["name"] ?? "";

if ($name === "" || !preg_match('/\A[\p{Hiragana}\p{Katakana}\p{Han}a-zA-Z]+\z/u', $name)) {
    exit("Invalid name.");
}
$phone = $_POST["phone"] ?? "";

if ($phone === "" || !preg_match('/\A[0-9-]+\z/', $phone)) {
    exit("Invalid phone number.");
}
$email = $_POST["email"] ?? "";
if ($email === "" || filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    exit("Invalid email address.");
}
$address = $_POST["address"] ?? "";

if ($address === "" || !preg_match('/\A[\p{Hiragana}\p{Katakana}\p{Han}a-zA-Z0-9-]+\z/u', $address)) {
    exit("Invalid address.");
}
$question = $_POST["question"] ?? "";

$gender = $_POST["gender"] ?? "";

if (!in_array($gender, ["male", "female"], true)) {
    exit("Invalid gender.");
}
?>
<h1>入力内容確認</h1>
<p>名前：
<?php
$name = $_POST["name"] ?? "";
echo htmlspecialchars($name, ENT_QUOTES, "UTF-8");
?>
</p>
<p>Age:
<?php echo htmlspecialchars($_POST["age"] ?? "" , ENT_QUOTES, "UTF-8"); ?>
</p>

<p>phone:
<?php echo htmlspecialchars($_POST["phone"] ?? "" ,ENT_QUOTES, "UTF-8"); ?>
</p>

<p>Email:
<?php echo htmlspecialchars($_POST["email"] ?? "" ,ENT_QUOTES, "UTF-8"); ?>
</p>

<p>Address:
<?php echo htmlspecialchars($_POST["address"] ?? "", ENT_QUOTES, "UTF-8"); ?>
</p>

<p>Question:
<?php echo htmlspecialchars($_POST["question"] ?? "", ENT_QUOTES, "UTF-8"); ?>
</p>

<p>Gender:
<?php echo htmlspecialchars($gender === "male" ? "男性" : "女性", ENT_QUOTES, "UTF-8"); ?>
</p>

</body>
</html>






