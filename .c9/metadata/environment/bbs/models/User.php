{"filter":false,"title":"User.php","tooltip":"/bbs/models/User.php","undoManager":{"mark":26,"position":26,"stack":[[{"start":{"row":121,"column":63},"end":{"row":121,"column":64},"action":"remove","lines":["R"],"id":2}],[{"start":{"row":121,"column":63},"end":{"row":121,"column":64},"action":"insert","lines":["E"],"id":3}],[{"start":{"row":121,"column":65},"end":{"row":121,"column":66},"action":"remove","lines":["R"],"id":4}],[{"start":{"row":121,"column":65},"end":{"row":121,"column":66},"action":"insert","lines":["E"],"id":5}],[{"start":{"row":121,"column":65},"end":{"row":121,"column":66},"action":"remove","lines":["E"],"id":6},{"start":{"row":121,"column":64},"end":{"row":121,"column":65},"action":"remove","lines":["E"]}],[{"start":{"row":121,"column":64},"end":{"row":121,"column":65},"action":"insert","lines":["E"],"id":7}],[{"start":{"row":121,"column":64},"end":{"row":121,"column":65},"action":"remove","lines":["E"],"id":8}],[{"start":{"row":121,"column":64},"end":{"row":121,"column":65},"action":"insert","lines":["R"],"id":9},{"start":{"row":121,"column":65},"end":{"row":121,"column":66},"action":"insert","lines":["E"]}],[{"start":{"row":115,"column":24},"end":{"row":115,"column":59},"action":"remove","lines":["PDO exception: ' . $e->getMessage()"],"id":10}],[{"start":{"row":115,"column":24},"end":{"row":115,"column":33},"action":"insert","lines":["そのメールアドレス"],"id":11},{"start":{"row":115,"column":33},"end":{"row":115,"column":34},"action":"insert","lines":["は"]}],[{"start":{"row":115,"column":34},"end":{"row":115,"column":37},"action":"insert","lines":["すでに"],"id":12}],[{"start":{"row":115,"column":37},"end":{"row":115,"column":45},"action":"insert","lines":["登録されています"],"id":13}],[{"start":{"row":115,"column":45},"end":{"row":115,"column":46},"action":"insert","lines":["'"],"id":14}],[{"start":{"row":42,"column":8},"end":{"row":66,"column":9},"action":"remove","lines":["private static function get_connection(){","            try {","                // オプション設定","                $options = array(","                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,        // 失敗したら例外を投げる","                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_CLASS,   //デフォルトのフェッチモードはクラス","                    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',   //MySQL サーバーへの接続時に実行するコマンド","                  );","                $pdo = new PDO('mysql:host=localhost;dbname=bbs_app', 'root', '', $options);","                return $pdo;","                ","            } catch (PDOException $e) {","                return 'PDO exception: ' . $e->getMessage();","            }","        }","","// データベースとの切断を行うメソッド","        private static function close_connection($pdo, $stmp){","            try {","                $pdo = null;","                $stmp = null;","            } catch (PDOException $e) {","                return 'PDO exception: ' . $e->getMessage();","            }","        }"],"id":15}],[{"start":{"row":4,"column":14},"end":{"row":4,"column":15},"action":"insert","lines":[" "],"id":16},{"start":{"row":4,"column":15},"end":{"row":4,"column":16},"action":"insert","lines":["e"]},{"start":{"row":4,"column":16},"end":{"row":4,"column":17},"action":"insert","lines":["x"]},{"start":{"row":4,"column":17},"end":{"row":4,"column":18},"action":"insert","lines":["t"]},{"start":{"row":4,"column":18},"end":{"row":4,"column":19},"action":"insert","lines":["e"]},{"start":{"row":4,"column":19},"end":{"row":4,"column":20},"action":"insert","lines":["n"]}],[{"start":{"row":4,"column":20},"end":{"row":4,"column":21},"action":"insert","lines":["d"],"id":17},{"start":{"row":4,"column":21},"end":{"row":4,"column":22},"action":"insert","lines":["s"]}],[{"start":{"row":4,"column":22},"end":{"row":4,"column":23},"action":"insert","lines":[" "],"id":18},{"start":{"row":4,"column":23},"end":{"row":4,"column":24},"action":"insert","lines":["M"]},{"start":{"row":4,"column":24},"end":{"row":4,"column":25},"action":"insert","lines":["o"]},{"start":{"row":4,"column":25},"end":{"row":4,"column":26},"action":"insert","lines":["d"]},{"start":{"row":4,"column":26},"end":{"row":4,"column":27},"action":"insert","lines":["e"]},{"start":{"row":4,"column":27},"end":{"row":4,"column":28},"action":"insert","lines":["l"]}],[{"start":{"row":2,"column":3},"end":{"row":2,"column":4},"action":"insert","lines":["r"],"id":19},{"start":{"row":2,"column":4},"end":{"row":2,"column":5},"action":"insert","lines":["e"]},{"start":{"row":2,"column":5},"end":{"row":2,"column":6},"action":"insert","lines":["q"]}],[{"start":{"row":2,"column":3},"end":{"row":2,"column":6},"action":"remove","lines":["req"],"id":20},{"start":{"row":2,"column":3},"end":{"row":2,"column":15},"action":"insert","lines":["require_once"]}],[{"start":{"row":2,"column":15},"end":{"row":2,"column":16},"action":"insert","lines":[" "],"id":21}],[{"start":{"row":2,"column":16},"end":{"row":2,"column":18},"action":"insert","lines":["''"],"id":22}],[{"start":{"row":2,"column":17},"end":{"row":2,"column":18},"action":"insert","lines":["m"],"id":23},{"start":{"row":2,"column":18},"end":{"row":2,"column":19},"action":"insert","lines":["o"]},{"start":{"row":2,"column":19},"end":{"row":2,"column":20},"action":"insert","lines":["d"]},{"start":{"row":2,"column":20},"end":{"row":2,"column":21},"action":"insert","lines":["e"]},{"start":{"row":2,"column":21},"end":{"row":2,"column":22},"action":"insert","lines":["l"]},{"start":{"row":2,"column":22},"end":{"row":2,"column":23},"action":"insert","lines":["s"]}],[{"start":{"row":2,"column":23},"end":{"row":2,"column":24},"action":"insert","lines":["/"],"id":24},{"start":{"row":2,"column":24},"end":{"row":2,"column":25},"action":"insert","lines":["M"]}],[{"start":{"row":2,"column":25},"end":{"row":2,"column":26},"action":"insert","lines":["o"],"id":25}],[{"start":{"row":2,"column":24},"end":{"row":2,"column":26},"action":"remove","lines":["Mo"],"id":26},{"start":{"row":2,"column":24},"end":{"row":2,"column":29},"action":"insert","lines":["Model"]}],[{"start":{"row":2,"column":29},"end":{"row":2,"column":30},"action":"insert","lines":["."],"id":27},{"start":{"row":2,"column":30},"end":{"row":2,"column":31},"action":"insert","lines":["p"]},{"start":{"row":2,"column":31},"end":{"row":2,"column":32},"action":"insert","lines":["h"]},{"start":{"row":2,"column":32},"end":{"row":2,"column":33},"action":"insert","lines":["p"]}],[{"start":{"row":2,"column":34},"end":{"row":2,"column":35},"action":"insert","lines":[";"],"id":28}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":0,"column":0},"end":{"row":147,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1628682632997,"hash":"c1a7e8b4a35f7db478f6836c2d54e1ff5ce5d533"}