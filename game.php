<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>小遊戲</title>
    <style type="text/css">
    body {
      background-color: #D0D3E4;
      padding: 0px;
      margin: 0px;
    }

    img {
      border: 8px solid #757DA8;
      border-radius: 20px;
    }

    .bt1 {
      height: 100px;
      width: 500px;
      border: 5px solid #757DA8;
      border-radius: 20px;
      font-family: "標楷體";
      font-size: 18px;
      color: #757DA8;
      font-weight: bolder;
      cursor: pointer;
      box-shadow: 0px 5px 5px 0.5px #666;
    } 
    .main{
    position:absolute;  /* 這個定位是為了讓這個<div>區域固定在頁面底端 */
     bottom:0px;         /* 讓它定位在底端 */
     z-index:-1;         /* 設置元素堆疊順序為最底層，為了不讓它遮住下拉菜單的垂直列表項 */
     width:100%;         /* 設置寬度 */
     /* 因為不是所有瀏覽器都支持CSS3中的calc()方法，所以這裡寫了三條去設置高度 */
     height:-webkit-calc(100% - 200px);
     height:-moz-calc(100% - 200px);
     height:calc(100% - 200px);
     text-align: center;
    }
    .menu {
      z-index: 1;
      width: 100%;
      height: 150px;
      background-color: #757DA8;
      
    }

    .menu ul {
      margin: 0px;
      /* 去除外邊距，使其能夠緊貼<div>邊緣 */
      padding: 0px;
      /* 去除內邊距，使其能夠緊貼<div>邊緣 */
      list-style-type: none;
      /* 去除無序列表的標識符 */
    }

    li {
    
      float: left;
      /* 設置左浮動，讓它列表項的方向變成水平方向 */
      background-color: #757DA8;
      /* 設置背景顏色 */
      text-align: center;
      /* 設置水平對齊方式為居中 */
      width: 25%;
      /* 設置固定寬度 */
    }

    /* 設置header區域中的<a>標簽的初始樣式 */
    a {
      display: block;
      /* 轉換為塊級元素，為了讓點擊範圍能夠擴充到整個<li>區域 */
      line-height: 50px;
      /* 設置內邊距讓文字垂直居中。 */
      color: #FFFFFF;
      /* 修改文字初始顏色 */
      text-decoration: none;
      /* 去除<a>標簽的下劃線 */
        width: 100%;
    }
    ul.dropdown-content{
    display: none;
    }
  li.dropdown:hover ul{
	display: list-item;
}

  .top {
	font-size: 72px;
	font-weight: bolder;
	color: #FFF;
	border-bottom-width: 1px;
	border-bottom-style: solid;
	border-bottom-color: #FFF;
  margin: 0px;
  padding: 0px;
  text-align: center;
}
  </style>
</head>
<body>
    <?php
    include "mane.html";
    ?>
    <div class="main"> 
    <h1 style="color:#757DA8">&#10024;小&nbsp;遊&nbsp;戲&#10024;</h1>
<iframe style="border: 1px solid rgba(0, 0, 0, 0.1);" width="80%" height="800" src="https://www.figma.com/embed?embed_host=share&url=https%3A%2F%2Fwww.figma.com%2Fproto%2Fo3X4Kp89y8gSrhv0fVu9K6%2FSDGS-%25E6%25B5%25B7%25E6%25B4%258B%25E9%2581%258A%25E6%2588%25B2%3Ftype%3Ddesign%26node-id%3D4-2%26t%3DW7V03IZGjYjsTGOd-1%26scaling%3Dscale-down%26page-id%3D0%253A1%26mode%3Ddesign" allowfullscreen></iframe>
    
    </div> 
    </body>
</html>