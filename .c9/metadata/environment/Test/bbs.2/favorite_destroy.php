{"filter":false,"title":"favorite_destroy.php","tooltip":"/Test/bbs.2/favorite_destroy.php","undoManager":{"mark":42,"position":42,"stack":[[{"start":{"row":0,"column":0},"end":{"row":7,"column":49},"action":"insert","lines":["<?php","    require_once 'models/User.php';","    require_once 'models/Favorite.php';","    session_start();","    $post_id = $_POST['post_id'];","    $login_user = $_SESSION['login_user'];","    ","    Favorite::destroy($login_user->id, $post_id);"],"id":1}],[{"start":{"row":7,"column":49},"end":{"row":8,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":8,"column":0},"end":{"row":8,"column":4},"action":"insert","lines":["    "]},{"start":{"row":8,"column":4},"end":{"row":9,"column":0},"action":"insert","lines":["",""]},{"start":{"row":9,"column":0},"end":{"row":9,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":9,"column":4},"end":{"row":9,"column":5},"action":"insert","lines":["$"],"id":3},{"start":{"row":9,"column":5},"end":{"row":9,"column":6},"action":"insert","lines":["_"]}],[{"start":{"row":9,"column":4},"end":{"row":9,"column":6},"action":"remove","lines":["$_"],"id":4},{"start":{"row":9,"column":4},"end":{"row":9,"column":13},"action":"insert","lines":["$_SESSION"]}],[{"start":{"row":9,"column":13},"end":{"row":9,"column":15},"action":"insert","lines":["[]"],"id":5}],[{"start":{"row":9,"column":14},"end":{"row":9,"column":16},"action":"insert","lines":["''"],"id":6}],[{"start":{"row":9,"column":15},"end":{"row":9,"column":16},"action":"insert","lines":["f"],"id":7},{"start":{"row":9,"column":16},"end":{"row":9,"column":17},"action":"insert","lines":["l"]},{"start":{"row":9,"column":17},"end":{"row":9,"column":18},"action":"insert","lines":["a"]}],[{"start":{"row":9,"column":15},"end":{"row":9,"column":18},"action":"remove","lines":["fla"],"id":8},{"start":{"row":9,"column":15},"end":{"row":9,"column":28},"action":"insert","lines":["flash_message"]}],[{"start":{"row":9,"column":30},"end":{"row":9,"column":31},"action":"insert","lines":[" "],"id":9},{"start":{"row":9,"column":31},"end":{"row":9,"column":32},"action":"insert","lines":["="]}],[{"start":{"row":9,"column":32},"end":{"row":9,"column":33},"action":"insert","lines":[" "],"id":10}],[{"start":{"row":9,"column":33},"end":{"row":9,"column":35},"action":"insert","lines":["''"],"id":11}],[{"start":{"row":9,"column":34},"end":{"row":9,"column":44},"action":"insert","lines":["いいねを解除しました"],"id":12}],[{"start":{"row":9,"column":45},"end":{"row":9,"column":46},"action":"insert","lines":[";"],"id":13}],[{"start":{"row":9,"column":46},"end":{"row":10,"column":0},"action":"insert","lines":["",""],"id":14},{"start":{"row":10,"column":0},"end":{"row":10,"column":4},"action":"insert","lines":["    "]},{"start":{"row":10,"column":4},"end":{"row":11,"column":0},"action":"insert","lines":["",""]},{"start":{"row":11,"column":0},"end":{"row":11,"column":4},"action":"insert","lines":["    "]},{"start":{"row":11,"column":4},"end":{"row":11,"column":5},"action":"insert","lines":["h"]},{"start":{"row":11,"column":5},"end":{"row":11,"column":6},"action":"insert","lines":["e"]},{"start":{"row":11,"column":6},"end":{"row":11,"column":7},"action":"insert","lines":["a"]},{"start":{"row":11,"column":7},"end":{"row":11,"column":8},"action":"insert","lines":["d"]}],[{"start":{"row":11,"column":8},"end":{"row":11,"column":9},"action":"insert","lines":["e"],"id":15},{"start":{"row":11,"column":9},"end":{"row":11,"column":10},"action":"insert","lines":["r"]}],[{"start":{"row":11,"column":10},"end":{"row":11,"column":12},"action":"insert","lines":["()"],"id":16}],[{"start":{"row":11,"column":11},"end":{"row":11,"column":12},"action":"insert","lines":["L"],"id":17},{"start":{"row":11,"column":12},"end":{"row":11,"column":13},"action":"insert","lines":["o"]}],[{"start":{"row":11,"column":13},"end":{"row":11,"column":14},"action":"insert","lines":["c"],"id":18},{"start":{"row":11,"column":14},"end":{"row":11,"column":15},"action":"insert","lines":["a"]},{"start":{"row":11,"column":15},"end":{"row":11,"column":16},"action":"insert","lines":["t"]},{"start":{"row":11,"column":16},"end":{"row":11,"column":17},"action":"insert","lines":["i"]},{"start":{"row":11,"column":17},"end":{"row":11,"column":18},"action":"insert","lines":["o"]},{"start":{"row":11,"column":18},"end":{"row":11,"column":19},"action":"insert","lines":["n"]}],[{"start":{"row":11,"column":11},"end":{"row":11,"column":12},"action":"insert","lines":["'"],"id":19}],[{"start":{"row":11,"column":20},"end":{"row":11,"column":21},"action":"insert","lines":[":"],"id":20}],[{"start":{"row":11,"column":21},"end":{"row":11,"column":22},"action":"insert","lines":[" "],"id":21},{"start":{"row":11,"column":22},"end":{"row":11,"column":23},"action":"insert","lines":["s"]},{"start":{"row":11,"column":23},"end":{"row":11,"column":24},"action":"insert","lines":["h"]},{"start":{"row":11,"column":24},"end":{"row":11,"column":25},"action":"insert","lines":["o"]}],[{"start":{"row":11,"column":25},"end":{"row":11,"column":26},"action":"insert","lines":["w"],"id":22},{"start":{"row":11,"column":26},"end":{"row":11,"column":27},"action":"insert","lines":["."]},{"start":{"row":11,"column":27},"end":{"row":11,"column":28},"action":"insert","lines":["p"]}],[{"start":{"row":11,"column":28},"end":{"row":11,"column":29},"action":"insert","lines":["h"],"id":23},{"start":{"row":11,"column":29},"end":{"row":11,"column":30},"action":"insert","lines":["p"]}],[{"start":{"row":11,"column":30},"end":{"row":11,"column":31},"action":"insert","lines":["?"],"id":24},{"start":{"row":11,"column":31},"end":{"row":11,"column":32},"action":"insert","lines":["i"]},{"start":{"row":11,"column":32},"end":{"row":11,"column":33},"action":"insert","lines":["d"]},{"start":{"row":11,"column":33},"end":{"row":11,"column":34},"action":"insert","lines":["="]}],[{"start":{"row":11,"column":34},"end":{"row":11,"column":35},"action":"insert","lines":[" "],"id":25},{"start":{"row":11,"column":35},"end":{"row":11,"column":36},"action":"insert","lines":["."]}],[{"start":{"row":11,"column":36},"end":{"row":11,"column":37},"action":"insert","lines":[" "],"id":26},{"start":{"row":11,"column":37},"end":{"row":11,"column":38},"action":"insert","lines":["$"]},{"start":{"row":11,"column":38},"end":{"row":11,"column":39},"action":"insert","lines":["p"]}],[{"start":{"row":11,"column":37},"end":{"row":11,"column":39},"action":"remove","lines":["$p"],"id":27},{"start":{"row":11,"column":37},"end":{"row":11,"column":45},"action":"insert","lines":["$post_id"]}],[{"start":{"row":11,"column":46},"end":{"row":11,"column":47},"action":"insert","lines":[";"],"id":28}],[{"start":{"row":11,"column":47},"end":{"row":12,"column":0},"action":"insert","lines":["",""],"id":29},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "]},{"start":{"row":12,"column":4},"end":{"row":12,"column":5},"action":"insert","lines":["e"]},{"start":{"row":12,"column":5},"end":{"row":12,"column":6},"action":"insert","lines":["x"]},{"start":{"row":12,"column":6},"end":{"row":12,"column":7},"action":"insert","lines":["i"]}],[{"start":{"row":12,"column":7},"end":{"row":12,"column":8},"action":"insert","lines":["t"],"id":30},{"start":{"row":12,"column":8},"end":{"row":12,"column":9},"action":"insert","lines":[";"]}],[{"start":{"row":11,"column":34},"end":{"row":11,"column":35},"action":"insert","lines":["'"],"id":33}],[{"start":{"row":12,"column":9},"end":{"row":13,"column":0},"action":"insert","lines":["",""],"id":34},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "]},{"start":{"row":13,"column":4},"end":{"row":14,"column":0},"action":"insert","lines":["",""]},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":14,"column":4},"end":{"row":26,"column":9},"action":"insert","lines":["<?php","    require_once 'models/User.php';","    require_once 'models/Favorite.php';","    session_start();","    $post_id = $_POST['post_id'];","    $login_user = $_SESSION['login_user'];","    ","    Favorite::destroy($login_user->id, $post_id);","    ","    $_SESSION['flash_message'] = 'いいねを解除しました';","    ","    header('Location: show.php?id=' . $post_id);","    exit;"],"id":35}],[{"start":{"row":14,"column":6},"end":{"row":14,"column":9},"action":"remove","lines":["php"],"id":36},{"start":{"row":14,"column":5},"end":{"row":14,"column":6},"action":"remove","lines":["?"]},{"start":{"row":14,"column":4},"end":{"row":14,"column":5},"action":"remove","lines":["<"]},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"remove","lines":["    "]},{"start":{"row":13,"column":4},"end":{"row":14,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":14,"column":0},"end":{"row":15,"column":0},"action":"remove","lines":["    require_once 'models/User.php';",""],"id":37}],[{"start":{"row":14,"column":0},"end":{"row":15,"column":0},"action":"remove","lines":["    require_once 'models/Favorite.php';",""],"id":38}],[{"start":{"row":14,"column":0},"end":{"row":15,"column":0},"action":"remove","lines":["    session_start();",""],"id":39}],[{"start":{"row":14,"column":0},"end":{"row":15,"column":0},"action":"remove","lines":["    $post_id = $_POST['post_id'];",""],"id":40}],[{"start":{"row":14,"column":0},"end":{"row":15,"column":4},"action":"remove","lines":["    $login_user = $_SESSION['login_user'];","    "],"id":41}],[{"start":{"row":15,"column":0},"end":{"row":16,"column":4},"action":"remove","lines":["    Favorite::destroy($login_user->id, $post_id);","    "],"id":42}],[{"start":{"row":16,"column":0},"end":{"row":17,"column":4},"action":"remove","lines":["    $_SESSION['flash_message'] = 'いいねを解除しました';","    "],"id":43},{"start":{"row":15,"column":0},"end":{"row":16,"column":0},"action":"remove","lines":["",""]},{"start":{"row":14,"column":0},"end":{"row":15,"column":0},"action":"remove","lines":["",""]},{"start":{"row":13,"column":4},"end":{"row":14,"column":0},"action":"remove","lines":["",""]},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"remove","lines":["    "]}],[{"start":{"row":12,"column":9},"end":{"row":13,"column":0},"action":"remove","lines":["",""],"id":44}],[{"start":{"row":13,"column":3},"end":{"row":14,"column":9},"action":"remove","lines":[" header('Location: show.php?id=' . $post_id);","    exit;"],"id":45}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":13,"column":3},"end":{"row":13,"column":3},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1629945496277,"hash":"d5a345d0d3b2b06a36d585970f2e023d90f7e412"}