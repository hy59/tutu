<?php
    if(!isset($_post['submit'])){
        echo "ERROR";
    }else{
        
        //如果有表单提交
        //数据库连接参数
        $host = "localhost";
        $user = "root";
        $pass = "RSdyxjh2333";
        $db = "book_info";

        //取得表单中的值
        $key = $_POST['key'];

        //打开数据库连接
        $connection = mysql_connect($host, $user, $pass) or die("unable to connect!");
        //选择数据库
        mysql_select_db($db) or die("unable to select database!");
        //构建一个查询
        $query = sprintf("SELECT * FROM book_info WHERE booktitle = '%s'",
        mysql_real_escape_string($key));
        //执行查询
        $result = mysql_query($query) or die("Error in query: $query");

        echo "<table border='1'>
              <tr>
              <th>ISBN</th>
              <th>booktitle</th>
              <th>authors</th>
              <th>pub_house</th>
              <th>pub_date</th>
              <th>call_null</th>
              </tr>";

        while($row = mysql_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$row['ISBN']."</td>";
            echo "<td>".$row['booktitle']."</td>";
            echo "<td>".$row['authors']."</td>";
            echo "<td>".$row['pub_date']."</td>";
            echo "<td>".$row['pub_house']."</td>";
            echo "<td>".$row['call_null']."</td>";
        }
        echo "</table>";

        mysql_close($connection);

      
    }