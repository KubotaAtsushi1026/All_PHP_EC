{"filter":false,"title":"show_view.php","tooltip":"/users_20210608/show_view.php","undoManager":{"mark":75,"position":75,"stack":[[{"start":{"row":4,"column":20},"end":{"row":4,"column":21},"action":"remove","lines":["覧"],"id":2},{"start":{"row":4,"column":19},"end":{"row":4,"column":20},"action":"remove","lines":["一"]},{"start":{"row":4,"column":18},"end":{"row":4,"column":19},"action":"remove","lines":["ー"]},{"start":{"row":4,"column":17},"end":{"row":4,"column":18},"action":"remove","lines":["ザ"]},{"start":{"row":4,"column":16},"end":{"row":4,"column":17},"action":"remove","lines":["ー"]},{"start":{"row":4,"column":15},"end":{"row":4,"column":16},"action":"remove","lines":["ユ"]}],[{"start":{"row":4,"column":15},"end":{"row":4,"column":16},"action":"insert","lines":["<"],"id":3},{"start":{"row":4,"column":16},"end":{"row":4,"column":17},"action":"insert","lines":["?"]}],[{"start":{"row":4,"column":17},"end":{"row":4,"column":18},"action":"insert","lines":["="],"id":4}],[{"start":{"row":4,"column":18},"end":{"row":4,"column":19},"action":"insert","lines":[" "],"id":5},{"start":{"row":4,"column":19},"end":{"row":4,"column":20},"action":"insert","lines":["$"]},{"start":{"row":4,"column":20},"end":{"row":4,"column":21},"action":"insert","lines":["u"]},{"start":{"row":4,"column":21},"end":{"row":4,"column":22},"action":"insert","lines":["s"]},{"start":{"row":4,"column":22},"end":{"row":4,"column":23},"action":"insert","lines":["e"]}],[{"start":{"row":4,"column":23},"end":{"row":4,"column":24},"action":"insert","lines":["r"],"id":6},{"start":{"row":4,"column":24},"end":{"row":4,"column":25},"action":"insert","lines":["-"]}],[{"start":{"row":4,"column":25},"end":{"row":4,"column":26},"action":"insert","lines":[">"],"id":7},{"start":{"row":4,"column":26},"end":{"row":4,"column":27},"action":"insert","lines":["n"]},{"start":{"row":4,"column":27},"end":{"row":4,"column":28},"action":"insert","lines":["a"]},{"start":{"row":4,"column":28},"end":{"row":4,"column":29},"action":"insert","lines":["m"]},{"start":{"row":4,"column":29},"end":{"row":4,"column":30},"action":"insert","lines":["e"]}],[{"start":{"row":4,"column":30},"end":{"row":4,"column":31},"action":"insert","lines":[" "],"id":8},{"start":{"row":4,"column":31},"end":{"row":4,"column":32},"action":"insert","lines":["?"]},{"start":{"row":4,"column":32},"end":{"row":4,"column":33},"action":"insert","lines":[">"]}],[{"start":{"row":4,"column":33},"end":{"row":4,"column":36},"action":"insert","lines":["さんの"],"id":9}],[{"start":{"row":4,"column":36},"end":{"row":4,"column":38},"action":"insert","lines":["詳細"],"id":10}],[{"start":{"row":9,"column":12},"end":{"row":9,"column":18},"action":"remove","lines":["ユーザー一覧"],"id":11},{"start":{"row":9,"column":12},"end":{"row":9,"column":35},"action":"insert","lines":["<?= $user->name ?>さんの詳細"]}],[{"start":{"row":13,"column":7},"end":{"row":16,"column":40},"action":"remove","lines":[" <?php if(count($users) === 0): ?>","        <P>ユーザーはまだいません</P>","        <?php else: ?>","        <P>ユーザー人数: <?= count($users) ?>人"],"id":12}],[{"start":{"row":22,"column":8},"end":{"row":23,"column":23},"action":"remove","lines":["<?php endforeach; ?>","        <?php endif; ?>"],"id":13},{"start":{"row":22,"column":4},"end":{"row":22,"column":8},"action":"remove","lines":["    "]},{"start":{"row":22,"column":0},"end":{"row":22,"column":4},"action":"remove","lines":["    "]},{"start":{"row":21,"column":13},"end":{"row":22,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":14,"column":6},"end":{"row":15,"column":42},"action":"remove","lines":["  </P>","        <?php foreach($users as $user): ?>"],"id":14},{"start":{"row":14,"column":5},"end":{"row":14,"column":6},"action":"remove","lines":[" "]},{"start":{"row":14,"column":4},"end":{"row":14,"column":5},"action":"remove","lines":[" "]},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"remove","lines":["    "]},{"start":{"row":13,"column":7},"end":{"row":14,"column":0},"action":"remove","lines":["",""]},{"start":{"row":13,"column":6},"end":{"row":13,"column":7},"action":"remove","lines":[" "]}],[{"start":{"row":13,"column":5},"end":{"row":13,"column":6},"action":"remove","lines":[" "],"id":15},{"start":{"row":13,"column":4},"end":{"row":13,"column":5},"action":"remove","lines":[" "]},{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"remove","lines":["    "]},{"start":{"row":12,"column":23},"end":{"row":13,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":14,"column":16},"end":{"row":14,"column":55},"action":"remove","lines":["<a href=\"show.php?id=<?= $user->id ?>\">"],"id":16}],[{"start":{"row":14,"column":19},"end":{"row":14,"column":20},"action":"remove","lines":[">"],"id":17},{"start":{"row":14,"column":18},"end":{"row":14,"column":19},"action":"remove","lines":["a"]},{"start":{"row":14,"column":17},"end":{"row":14,"column":18},"action":"remove","lines":["/"]},{"start":{"row":14,"column":16},"end":{"row":14,"column":17},"action":"remove","lines":["<"]}],[{"start":{"row":20,"column":32},"end":{"row":20,"column":40},"action":"remove","lines":["新規ユーザー登録"],"id":18},{"start":{"row":20,"column":32},"end":{"row":20,"column":40},"action":"insert","lines":["新規ユーザー登録"]},{"start":{"row":20,"column":32},"end":{"row":20,"column":40},"action":"remove","lines":["新規ユーザー登録"]},{"start":{"row":20,"column":32},"end":{"row":20,"column":33},"action":"insert","lines":["ｙ"]},{"start":{"row":20,"column":32},"end":{"row":20,"column":33},"action":"remove","lines":["ｙ"]},{"start":{"row":20,"column":32},"end":{"row":20,"column":33},"action":"insert","lines":["ゆ"]},{"start":{"row":20,"column":32},"end":{"row":20,"column":33},"action":"remove","lines":["ゆ"]},{"start":{"row":20,"column":32},"end":{"row":20,"column":34},"action":"insert","lines":["ゆー"]},{"start":{"row":20,"column":32},"end":{"row":20,"column":34},"action":"remove","lines":["ゆー"]},{"start":{"row":20,"column":32},"end":{"row":20,"column":35},"action":"insert","lines":["ゆーｚ"]},{"start":{"row":20,"column":32},"end":{"row":20,"column":35},"action":"remove","lines":["ゆーｚ"]},{"start":{"row":20,"column":32},"end":{"row":20,"column":35},"action":"insert","lines":["ゆーざ"]},{"start":{"row":20,"column":32},"end":{"row":20,"column":35},"action":"remove","lines":["ゆーざ"]},{"start":{"row":20,"column":32},"end":{"row":20,"column":36},"action":"insert","lines":["ゆーざー"]},{"start":{"row":20,"column":32},"end":{"row":20,"column":36},"action":"remove","lines":["ゆーざー"]},{"start":{"row":20,"column":32},"end":{"row":20,"column":36},"action":"insert","lines":["ユーザー"]}],[{"start":{"row":20,"column":32},"end":{"row":20,"column":36},"action":"remove","lines":["ユーザー"],"id":19},{"start":{"row":20,"column":32},"end":{"row":20,"column":36},"action":"insert","lines":["ユーザー"]}],[{"start":{"row":20,"column":36},"end":{"row":20,"column":38},"action":"insert","lines":["一覧"],"id":20},{"start":{"row":20,"column":38},"end":{"row":20,"column":39},"action":"insert","lines":["へ"]}],[{"start":{"row":21,"column":39},"end":{"row":21,"column":40},"action":"remove","lines":["除"],"id":21},{"start":{"row":21,"column":38},"end":{"row":21,"column":39},"action":"remove","lines":["削"]},{"start":{"row":21,"column":37},"end":{"row":21,"column":38},"action":"remove","lines":["ー"]},{"start":{"row":21,"column":36},"end":{"row":21,"column":37},"action":"remove","lines":["ザ"]},{"start":{"row":21,"column":35},"end":{"row":21,"column":36},"action":"remove","lines":["ー"]},{"start":{"row":21,"column":34},"end":{"row":21,"column":35},"action":"remove","lines":["ユ"]},{"start":{"row":21,"column":33},"end":{"row":21,"column":34},"action":"remove","lines":["全"]}],[{"start":{"row":21,"column":33},"end":{"row":21,"column":35},"action":"insert","lines":["編集"],"id":22}],[{"start":{"row":20,"column":25},"end":{"row":20,"column":26},"action":"remove","lines":["e"],"id":23},{"start":{"row":20,"column":24},"end":{"row":20,"column":25},"action":"remove","lines":["t"]},{"start":{"row":20,"column":23},"end":{"row":20,"column":24},"action":"remove","lines":["a"]},{"start":{"row":20,"column":22},"end":{"row":20,"column":23},"action":"remove","lines":["e"]},{"start":{"row":20,"column":21},"end":{"row":20,"column":22},"action":"remove","lines":["r"]},{"start":{"row":20,"column":20},"end":{"row":20,"column":21},"action":"remove","lines":["c"]}],[{"start":{"row":20,"column":20},"end":{"row":20,"column":21},"action":"insert","lines":["i"],"id":24},{"start":{"row":20,"column":21},"end":{"row":20,"column":22},"action":"insert","lines":["n"]},{"start":{"row":20,"column":22},"end":{"row":20,"column":23},"action":"insert","lines":["d"]},{"start":{"row":20,"column":23},"end":{"row":20,"column":24},"action":"insert","lines":["e"]},{"start":{"row":20,"column":24},"end":{"row":20,"column":25},"action":"insert","lines":["x"]}],[{"start":{"row":21,"column":26},"end":{"row":21,"column":27},"action":"remove","lines":["y"],"id":25},{"start":{"row":21,"column":25},"end":{"row":21,"column":26},"action":"remove","lines":["o"]},{"start":{"row":21,"column":24},"end":{"row":21,"column":25},"action":"remove","lines":["r"]},{"start":{"row":21,"column":23},"end":{"row":21,"column":24},"action":"remove","lines":["t"]},{"start":{"row":21,"column":22},"end":{"row":21,"column":23},"action":"remove","lines":["s"]},{"start":{"row":21,"column":21},"end":{"row":21,"column":22},"action":"remove","lines":["e"]}],[{"start":{"row":21,"column":21},"end":{"row":21,"column":22},"action":"insert","lines":["e"],"id":26}],[{"start":{"row":21,"column":21},"end":{"row":21,"column":22},"action":"remove","lines":["e"],"id":27},{"start":{"row":21,"column":20},"end":{"row":21,"column":21},"action":"remove","lines":["d"]}],[{"start":{"row":21,"column":20},"end":{"row":21,"column":21},"action":"insert","lines":["e"],"id":28},{"start":{"row":21,"column":21},"end":{"row":21,"column":22},"action":"insert","lines":["d"]},{"start":{"row":21,"column":22},"end":{"row":21,"column":23},"action":"insert","lines":["i"]},{"start":{"row":21,"column":23},"end":{"row":21,"column":24},"action":"insert","lines":["t"]}],[{"start":{"row":21,"column":28},"end":{"row":21,"column":29},"action":"insert","lines":["?"],"id":29},{"start":{"row":21,"column":29},"end":{"row":21,"column":30},"action":"insert","lines":["i"]},{"start":{"row":21,"column":30},"end":{"row":21,"column":31},"action":"insert","lines":["d"]}],[{"start":{"row":21,"column":31},"end":{"row":21,"column":32},"action":"insert","lines":["="],"id":30},{"start":{"row":21,"column":32},"end":{"row":21,"column":33},"action":"insert","lines":["<"]}],[{"start":{"row":21,"column":33},"end":{"row":21,"column":34},"action":"insert","lines":["?"],"id":31},{"start":{"row":21,"column":34},"end":{"row":21,"column":35},"action":"insert","lines":["="]}],[{"start":{"row":21,"column":35},"end":{"row":21,"column":36},"action":"insert","lines":[" "],"id":32},{"start":{"row":21,"column":36},"end":{"row":21,"column":37},"action":"insert","lines":["$"]},{"start":{"row":21,"column":37},"end":{"row":21,"column":38},"action":"insert","lines":["u"]},{"start":{"row":21,"column":38},"end":{"row":21,"column":39},"action":"insert","lines":["s"]},{"start":{"row":21,"column":39},"end":{"row":21,"column":40},"action":"insert","lines":["e"]}],[{"start":{"row":21,"column":40},"end":{"row":21,"column":41},"action":"insert","lines":["r"],"id":33},{"start":{"row":21,"column":41},"end":{"row":21,"column":42},"action":"insert","lines":["-"]}],[{"start":{"row":21,"column":42},"end":{"row":21,"column":43},"action":"insert","lines":[">"],"id":34},{"start":{"row":21,"column":43},"end":{"row":21,"column":44},"action":"insert","lines":["i"]}],[{"start":{"row":21,"column":44},"end":{"row":21,"column":45},"action":"insert","lines":["d"],"id":35}],[{"start":{"row":21,"column":45},"end":{"row":21,"column":46},"action":"insert","lines":[" "],"id":36},{"start":{"row":21,"column":46},"end":{"row":21,"column":47},"action":"insert","lines":["?"]},{"start":{"row":21,"column":47},"end":{"row":21,"column":48},"action":"insert","lines":[">"]}],[{"start":{"row":21,"column":60},"end":{"row":22,"column":0},"action":"insert","lines":["",""],"id":37},{"start":{"row":22,"column":0},"end":{"row":22,"column":8},"action":"insert","lines":["        "]},{"start":{"row":22,"column":8},"end":{"row":22,"column":9},"action":"insert","lines":["<"]}],[{"start":{"row":22,"column":9},"end":{"row":22,"column":10},"action":"insert","lines":["f"],"id":38},{"start":{"row":22,"column":10},"end":{"row":22,"column":11},"action":"insert","lines":["o"]},{"start":{"row":22,"column":11},"end":{"row":22,"column":12},"action":"insert","lines":["r"]},{"start":{"row":22,"column":12},"end":{"row":22,"column":13},"action":"insert","lines":[","]}],[{"start":{"row":22,"column":12},"end":{"row":22,"column":13},"action":"remove","lines":[","],"id":39}],[{"start":{"row":22,"column":12},"end":{"row":22,"column":13},"action":"insert","lines":["m"],"id":40}],[{"start":{"row":22,"column":13},"end":{"row":22,"column":14},"action":"insert","lines":[" "],"id":41},{"start":{"row":22,"column":14},"end":{"row":22,"column":15},"action":"insert","lines":["a"]},{"start":{"row":22,"column":15},"end":{"row":22,"column":16},"action":"insert","lines":["c"]},{"start":{"row":22,"column":16},"end":{"row":22,"column":17},"action":"insert","lines":["t"]},{"start":{"row":22,"column":17},"end":{"row":22,"column":18},"action":"insert","lines":["i"]},{"start":{"row":22,"column":18},"end":{"row":22,"column":19},"action":"insert","lines":["o"]},{"start":{"row":22,"column":19},"end":{"row":22,"column":20},"action":"insert","lines":["n"]}],[{"start":{"row":22,"column":20},"end":{"row":22,"column":21},"action":"insert","lines":["="],"id":42}],[{"start":{"row":22,"column":21},"end":{"row":22,"column":23},"action":"insert","lines":["\"\""],"id":43}],[{"start":{"row":22,"column":22},"end":{"row":22,"column":23},"action":"insert","lines":["d"],"id":44},{"start":{"row":22,"column":23},"end":{"row":22,"column":24},"action":"insert","lines":["e"]},{"start":{"row":22,"column":24},"end":{"row":22,"column":25},"action":"insert","lines":["s"]},{"start":{"row":22,"column":25},"end":{"row":22,"column":26},"action":"insert","lines":["t"]},{"start":{"row":22,"column":26},"end":{"row":22,"column":27},"action":"insert","lines":["r"]},{"start":{"row":22,"column":27},"end":{"row":22,"column":28},"action":"insert","lines":["o"]}],[{"start":{"row":22,"column":28},"end":{"row":22,"column":29},"action":"insert","lines":["y"],"id":45},{"start":{"row":22,"column":29},"end":{"row":22,"column":30},"action":"insert","lines":["."]}],[{"start":{"row":22,"column":30},"end":{"row":22,"column":31},"action":"insert","lines":["p"],"id":46},{"start":{"row":22,"column":31},"end":{"row":22,"column":32},"action":"insert","lines":["h"]},{"start":{"row":22,"column":32},"end":{"row":22,"column":33},"action":"insert","lines":["p"]}],[{"start":{"row":22,"column":34},"end":{"row":22,"column":35},"action":"insert","lines":[" "],"id":47},{"start":{"row":22,"column":35},"end":{"row":22,"column":36},"action":"insert","lines":["m"]},{"start":{"row":22,"column":36},"end":{"row":22,"column":37},"action":"insert","lines":["e"]},{"start":{"row":22,"column":37},"end":{"row":22,"column":38},"action":"insert","lines":["t"]},{"start":{"row":22,"column":38},"end":{"row":22,"column":39},"action":"insert","lines":["h"]},{"start":{"row":22,"column":39},"end":{"row":22,"column":40},"action":"insert","lines":["o"]}],[{"start":{"row":22,"column":40},"end":{"row":22,"column":41},"action":"insert","lines":["d"],"id":48},{"start":{"row":22,"column":41},"end":{"row":22,"column":42},"action":"insert","lines":["="]}],[{"start":{"row":22,"column":42},"end":{"row":22,"column":44},"action":"insert","lines":["\"\""],"id":49}],[{"start":{"row":22,"column":43},"end":{"row":22,"column":44},"action":"insert","lines":["P"],"id":50},{"start":{"row":22,"column":44},"end":{"row":22,"column":45},"action":"insert","lines":["O"]},{"start":{"row":22,"column":45},"end":{"row":22,"column":46},"action":"insert","lines":["S"]},{"start":{"row":22,"column":46},"end":{"row":22,"column":47},"action":"insert","lines":["T"]}],[{"start":{"row":22,"column":48},"end":{"row":22,"column":56},"action":"insert","lines":["></form>"],"id":51}],[{"start":{"row":22,"column":49},"end":{"row":24,"column":8},"action":"insert","lines":["","            ","        "],"id":52}],[{"start":{"row":23,"column":12},"end":{"row":23,"column":13},"action":"insert","lines":["<"],"id":53},{"start":{"row":23,"column":13},"end":{"row":23,"column":14},"action":"insert","lines":["b"]}],[{"start":{"row":23,"column":14},"end":{"row":23,"column":15},"action":"insert","lines":["u"],"id":54},{"start":{"row":23,"column":15},"end":{"row":23,"column":16},"action":"insert","lines":["t"]},{"start":{"row":23,"column":16},"end":{"row":23,"column":17},"action":"insert","lines":["t"]},{"start":{"row":23,"column":17},"end":{"row":23,"column":18},"action":"insert","lines":["o"]},{"start":{"row":23,"column":18},"end":{"row":23,"column":19},"action":"insert","lines":["n"]}],[{"start":{"row":23,"column":19},"end":{"row":23,"column":20},"action":"insert","lines":[" "],"id":55},{"start":{"row":23,"column":20},"end":{"row":23,"column":21},"action":"insert","lines":["t"]},{"start":{"row":23,"column":21},"end":{"row":23,"column":22},"action":"insert","lines":["y"]},{"start":{"row":23,"column":22},"end":{"row":23,"column":23},"action":"insert","lines":["p"]},{"start":{"row":23,"column":23},"end":{"row":23,"column":24},"action":"insert","lines":["e"]}],[{"start":{"row":23,"column":24},"end":{"row":23,"column":25},"action":"insert","lines":["="],"id":56}],[{"start":{"row":23,"column":25},"end":{"row":23,"column":27},"action":"insert","lines":["\"\""],"id":57}],[{"start":{"row":23,"column":26},"end":{"row":23,"column":27},"action":"insert","lines":["s"],"id":58},{"start":{"row":23,"column":27},"end":{"row":23,"column":28},"action":"insert","lines":["u"]},{"start":{"row":23,"column":28},"end":{"row":23,"column":29},"action":"insert","lines":["b"]},{"start":{"row":23,"column":29},"end":{"row":23,"column":30},"action":"insert","lines":["m"]},{"start":{"row":23,"column":30},"end":{"row":23,"column":31},"action":"insert","lines":["i"]},{"start":{"row":23,"column":31},"end":{"row":23,"column":32},"action":"insert","lines":["t"]}],[{"start":{"row":23,"column":33},"end":{"row":23,"column":43},"action":"insert","lines":["></button>"],"id":59}],[{"start":{"row":23,"column":34},"end":{"row":23,"column":36},"action":"insert","lines":["削除"],"id":60}],[{"start":{"row":22,"column":49},"end":{"row":23,"column":12},"action":"insert","lines":["","            "],"id":61}],[{"start":{"row":23,"column":12},"end":{"row":23,"column":18},"action":"insert","lines":["<input"],"id":62}],[{"start":{"row":23,"column":18},"end":{"row":23,"column":19},"action":"insert","lines":[" "],"id":63},{"start":{"row":23,"column":19},"end":{"row":23,"column":20},"action":"insert","lines":["t"]},{"start":{"row":23,"column":20},"end":{"row":23,"column":21},"action":"insert","lines":["y"]},{"start":{"row":23,"column":21},"end":{"row":23,"column":22},"action":"insert","lines":["p"]},{"start":{"row":23,"column":22},"end":{"row":23,"column":23},"action":"insert","lines":["e"]}],[{"start":{"row":23,"column":23},"end":{"row":23,"column":24},"action":"insert","lines":["="],"id":64}],[{"start":{"row":23,"column":24},"end":{"row":23,"column":26},"action":"insert","lines":["\"\""],"id":65}],[{"start":{"row":23,"column":25},"end":{"row":23,"column":26},"action":"insert","lines":["h"],"id":66},{"start":{"row":23,"column":26},"end":{"row":23,"column":27},"action":"insert","lines":["i"]},{"start":{"row":23,"column":27},"end":{"row":23,"column":28},"action":"insert","lines":["d"]},{"start":{"row":23,"column":28},"end":{"row":23,"column":29},"action":"insert","lines":["d"]},{"start":{"row":23,"column":29},"end":{"row":23,"column":30},"action":"insert","lines":["e"]},{"start":{"row":23,"column":30},"end":{"row":23,"column":31},"action":"insert","lines":["n"]}],[{"start":{"row":23,"column":32},"end":{"row":23,"column":33},"action":"insert","lines":[" "],"id":67},{"start":{"row":23,"column":33},"end":{"row":23,"column":34},"action":"insert","lines":["n"]},{"start":{"row":23,"column":34},"end":{"row":23,"column":35},"action":"insert","lines":["a"]},{"start":{"row":23,"column":35},"end":{"row":23,"column":36},"action":"insert","lines":["m"]},{"start":{"row":23,"column":36},"end":{"row":23,"column":37},"action":"insert","lines":["e"]},{"start":{"row":23,"column":37},"end":{"row":23,"column":38},"action":"insert","lines":["="]}],[{"start":{"row":23,"column":38},"end":{"row":23,"column":40},"action":"insert","lines":["\"\""],"id":68}],[{"start":{"row":23,"column":39},"end":{"row":23,"column":40},"action":"insert","lines":["i"],"id":69},{"start":{"row":23,"column":40},"end":{"row":23,"column":41},"action":"insert","lines":["d"]}],[{"start":{"row":23,"column":42},"end":{"row":23,"column":43},"action":"insert","lines":[" "],"id":70},{"start":{"row":23,"column":43},"end":{"row":23,"column":44},"action":"insert","lines":["v"]},{"start":{"row":23,"column":44},"end":{"row":23,"column":45},"action":"insert","lines":["a"]},{"start":{"row":23,"column":45},"end":{"row":23,"column":46},"action":"insert","lines":["l"]},{"start":{"row":23,"column":46},"end":{"row":23,"column":47},"action":"insert","lines":["u"]},{"start":{"row":23,"column":47},"end":{"row":23,"column":48},"action":"insert","lines":["e"]}],[{"start":{"row":23,"column":48},"end":{"row":23,"column":49},"action":"insert","lines":["="],"id":71}],[{"start":{"row":23,"column":49},"end":{"row":23,"column":51},"action":"insert","lines":["\"\""],"id":72}],[{"start":{"row":23,"column":50},"end":{"row":23,"column":51},"action":"insert","lines":["<"],"id":73},{"start":{"row":23,"column":51},"end":{"row":23,"column":52},"action":"insert","lines":["?"]},{"start":{"row":23,"column":52},"end":{"row":23,"column":53},"action":"insert","lines":["="]}],[{"start":{"row":23,"column":53},"end":{"row":23,"column":54},"action":"insert","lines":[" "],"id":74},{"start":{"row":23,"column":54},"end":{"row":23,"column":55},"action":"insert","lines":["$"]},{"start":{"row":23,"column":55},"end":{"row":23,"column":56},"action":"insert","lines":["u"]},{"start":{"row":23,"column":56},"end":{"row":23,"column":57},"action":"insert","lines":["s"]},{"start":{"row":23,"column":57},"end":{"row":23,"column":58},"action":"insert","lines":["e"]},{"start":{"row":23,"column":58},"end":{"row":23,"column":59},"action":"insert","lines":["r"]}],[{"start":{"row":23,"column":59},"end":{"row":23,"column":60},"action":"insert","lines":["-"],"id":75},{"start":{"row":23,"column":60},"end":{"row":23,"column":61},"action":"insert","lines":[">"]},{"start":{"row":23,"column":61},"end":{"row":23,"column":62},"action":"insert","lines":["i"]},{"start":{"row":23,"column":62},"end":{"row":23,"column":63},"action":"insert","lines":["d"]}],[{"start":{"row":23,"column":63},"end":{"row":23,"column":64},"action":"insert","lines":[" "],"id":76},{"start":{"row":23,"column":64},"end":{"row":23,"column":65},"action":"insert","lines":["?"]},{"start":{"row":23,"column":65},"end":{"row":23,"column":66},"action":"insert","lines":[">"]}],[{"start":{"row":23,"column":67},"end":{"row":23,"column":68},"action":"insert","lines":[">"],"id":77}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":23,"column":68},"end":{"row":23,"column":68},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1624352592749,"hash":"eeb9917cf33a9af59196bbc253c723e89dd0aedd"}