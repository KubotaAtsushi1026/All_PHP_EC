{"filter":false,"title":"index_view.php","tooltip":"/Test/users.bbs/index_view.php","undoManager":{"mark":12,"position":12,"stack":[[{"start":{"row":5,"column":20},"end":{"row":5,"column":21},"action":"remove","lines":["覧"],"id":2},{"start":{"row":5,"column":19},"end":{"row":5,"column":20},"action":"remove","lines":["一"]},{"start":{"row":5,"column":18},"end":{"row":5,"column":19},"action":"remove","lines":["ー"]},{"start":{"row":5,"column":17},"end":{"row":5,"column":18},"action":"remove","lines":["ザ"]},{"start":{"row":5,"column":16},"end":{"row":5,"column":17},"action":"remove","lines":["ー"]},{"start":{"row":5,"column":15},"end":{"row":5,"column":16},"action":"remove","lines":["ユ"]}],[{"start":{"row":5,"column":15},"end":{"row":5,"column":16},"action":"insert","lines":["k"],"id":3},{"start":{"row":5,"column":16},"end":{"row":5,"column":17},"action":"insert","lines":["a"]},{"start":{"row":5,"column":17},"end":{"row":5,"column":18},"action":"insert","lines":["i"]},{"start":{"row":5,"column":18},"end":{"row":5,"column":19},"action":"insert","lines":["i"]}],[{"start":{"row":5,"column":18},"end":{"row":5,"column":19},"action":"remove","lines":["i"],"id":4},{"start":{"row":5,"column":17},"end":{"row":5,"column":18},"action":"remove","lines":["i"]},{"start":{"row":5,"column":16},"end":{"row":5,"column":17},"action":"remove","lines":["a"]},{"start":{"row":5,"column":15},"end":{"row":5,"column":16},"action":"remove","lines":["k"]}],[{"start":{"row":5,"column":15},"end":{"row":5,"column":25},"action":"insert","lines":["会員制写真投稿サイト"],"id":5}],[{"start":{"row":8,"column":17},"end":{"row":8,"column":18},"action":"remove","lines":["覧"],"id":6},{"start":{"row":8,"column":16},"end":{"row":8,"column":17},"action":"remove","lines":["一"]},{"start":{"row":8,"column":15},"end":{"row":8,"column":16},"action":"remove","lines":["ー"]},{"start":{"row":8,"column":14},"end":{"row":8,"column":15},"action":"remove","lines":["ザ"]},{"start":{"row":8,"column":13},"end":{"row":8,"column":14},"action":"remove","lines":["ー"]},{"start":{"row":8,"column":12},"end":{"row":8,"column":13},"action":"remove","lines":["ユ"]}],[{"start":{"row":8,"column":12},"end":{"row":8,"column":22},"action":"insert","lines":["会員制写真投稿サイト"],"id":7}],[{"start":{"row":12,"column":8},"end":{"row":24,"column":23},"action":"remove","lines":["<?php if(count($users) === 0): ?>","        <P>ユーザーはまだいません</P>","        <?php else: ?>","        <P>ユーザー人数: <?= count($users) ?>人</P>","        <?php foreach($users as $user): ?>","        <ul>","            <li><a href=\"show.php?id=<?= $user->id ?>\"><?= $user->id ?></a></li>","            <li><?= $user->name ?></li>","            <li><?= $user->age . '歳' ?></li>","            <li><?= $user->created_at ?></li>","        </ul>","        <?php endforeach; ?>","        <?php endif; ?>"],"id":8}],[{"start":{"row":14,"column":0},"end":{"row":15,"column":0},"action":"remove","lines":["        <!--<p><a href=\"destroy.php\">全ユーザー削除</s></p>-->",""],"id":9},{"start":{"row":14,"column":0},"end":{"row":15,"column":0},"action":"insert","lines":["        <p><a href=\"create.php\">新規ユーザー登録</a></p>",""]}],[{"start":{"row":14,"column":39},"end":{"row":14,"column":40},"action":"remove","lines":["録"],"id":10}],[{"start":{"row":14,"column":38},"end":{"row":14,"column":39},"action":"remove","lines":["登"],"id":11},{"start":{"row":14,"column":37},"end":{"row":14,"column":38},"action":"remove","lines":["ー"]},{"start":{"row":14,"column":36},"end":{"row":14,"column":37},"action":"remove","lines":["ザ"]},{"start":{"row":14,"column":35},"end":{"row":14,"column":36},"action":"remove","lines":["ー"]},{"start":{"row":14,"column":34},"end":{"row":14,"column":35},"action":"remove","lines":["ユ"]},{"start":{"row":14,"column":33},"end":{"row":14,"column":34},"action":"remove","lines":["規"]},{"start":{"row":14,"column":32},"end":{"row":14,"column":33},"action":"remove","lines":["新"]}],[{"start":{"row":14,"column":32},"end":{"row":14,"column":36},"action":"insert","lines":["ログイン"],"id":12}],[{"start":{"row":14,"column":25},"end":{"row":14,"column":26},"action":"remove","lines":["e"],"id":13},{"start":{"row":14,"column":24},"end":{"row":14,"column":25},"action":"remove","lines":["t"]},{"start":{"row":14,"column":23},"end":{"row":14,"column":24},"action":"remove","lines":["a"]},{"start":{"row":14,"column":22},"end":{"row":14,"column":23},"action":"remove","lines":["e"]},{"start":{"row":14,"column":21},"end":{"row":14,"column":22},"action":"remove","lines":["r"]},{"start":{"row":14,"column":20},"end":{"row":14,"column":21},"action":"remove","lines":["c"]}],[{"start":{"row":14,"column":20},"end":{"row":14,"column":21},"action":"insert","lines":["l"],"id":14},{"start":{"row":14,"column":21},"end":{"row":14,"column":22},"action":"insert","lines":["o"]},{"start":{"row":14,"column":22},"end":{"row":14,"column":23},"action":"insert","lines":["g"]},{"start":{"row":14,"column":23},"end":{"row":14,"column":24},"action":"insert","lines":["i"]},{"start":{"row":14,"column":24},"end":{"row":14,"column":25},"action":"insert","lines":["n"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":14,"column":25},"end":{"row":14,"column":25},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1645689295770,"hash":"27a1017dc95d086b573c3968e458fa4e19bf6203"}