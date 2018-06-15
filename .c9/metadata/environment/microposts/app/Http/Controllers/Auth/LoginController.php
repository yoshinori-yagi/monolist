{"filter":false,"title":"LoginController.php","tooltip":"/microposts/app/Http/Controllers/Auth/LoginController.php","undoManager":{"mark":8,"position":8,"stack":[[{"start":{"row":37,"column":5},"end":{"row":38,"column":0},"action":"insert","lines":["",""],"id":1},{"start":{"row":38,"column":0},"end":{"row":38,"column":4},"action":"insert","lines":["    "]},{"start":{"row":38,"column":4},"end":{"row":39,"column":0},"action":"insert","lines":["",""]},{"start":{"row":39,"column":0},"end":{"row":39,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":39,"column":4},"end":{"row":48,"column":5},"action":"insert","lines":["public function logout(Request $request)","    {","        $this->guard()->logout();","","        $request->session()->flush();","","        $request->session()->regenerate();","","        return redirect('/redirect/path/to/after/regist/');","    }"],"id":2}],[{"start":{"row":47,"column":54},"end":{"row":47,"column":55},"action":"remove","lines":["t"],"id":3},{"start":{"row":47,"column":53},"end":{"row":47,"column":54},"action":"remove","lines":["s"]},{"start":{"row":47,"column":52},"end":{"row":47,"column":53},"action":"remove","lines":["i"]},{"start":{"row":47,"column":51},"end":{"row":47,"column":52},"action":"remove","lines":["g"]},{"start":{"row":47,"column":50},"end":{"row":47,"column":51},"action":"remove","lines":["e"]},{"start":{"row":47,"column":49},"end":{"row":47,"column":50},"action":"remove","lines":["r"]},{"start":{"row":47,"column":48},"end":{"row":47,"column":49},"action":"remove","lines":["/"]},{"start":{"row":47,"column":47},"end":{"row":47,"column":48},"action":"remove","lines":["r"]},{"start":{"row":47,"column":46},"end":{"row":47,"column":47},"action":"remove","lines":["e"]},{"start":{"row":47,"column":45},"end":{"row":47,"column":46},"action":"remove","lines":["t"]},{"start":{"row":47,"column":44},"end":{"row":47,"column":45},"action":"remove","lines":["f"]},{"start":{"row":47,"column":43},"end":{"row":47,"column":44},"action":"remove","lines":["a"]}],[{"start":{"row":47,"column":43},"end":{"row":47,"column":44},"action":"remove","lines":["/"],"id":4},{"start":{"row":47,"column":42},"end":{"row":47,"column":43},"action":"remove","lines":["/"]},{"start":{"row":47,"column":41},"end":{"row":47,"column":42},"action":"remove","lines":["o"]},{"start":{"row":47,"column":40},"end":{"row":47,"column":41},"action":"remove","lines":["t"]},{"start":{"row":47,"column":39},"end":{"row":47,"column":40},"action":"remove","lines":["/"]},{"start":{"row":47,"column":38},"end":{"row":47,"column":39},"action":"remove","lines":["h"]},{"start":{"row":47,"column":37},"end":{"row":47,"column":38},"action":"remove","lines":["t"]},{"start":{"row":47,"column":36},"end":{"row":47,"column":37},"action":"remove","lines":["a"]},{"start":{"row":47,"column":35},"end":{"row":47,"column":36},"action":"remove","lines":["p"]},{"start":{"row":47,"column":34},"end":{"row":47,"column":35},"action":"remove","lines":["/"]},{"start":{"row":47,"column":33},"end":{"row":47,"column":34},"action":"remove","lines":["t"]},{"start":{"row":47,"column":32},"end":{"row":47,"column":33},"action":"remove","lines":["c"]},{"start":{"row":47,"column":31},"end":{"row":47,"column":32},"action":"remove","lines":["e"]},{"start":{"row":47,"column":30},"end":{"row":47,"column":31},"action":"remove","lines":["r"]},{"start":{"row":47,"column":29},"end":{"row":47,"column":30},"action":"remove","lines":["i"]},{"start":{"row":47,"column":28},"end":{"row":47,"column":29},"action":"remove","lines":["d"]}],[{"start":{"row":47,"column":27},"end":{"row":47,"column":28},"action":"remove","lines":["e"],"id":5},{"start":{"row":47,"column":26},"end":{"row":47,"column":27},"action":"remove","lines":["r"]},{"start":{"row":47,"column":25},"end":{"row":47,"column":26},"action":"remove","lines":["/"]}],[{"start":{"row":47,"column":25},"end":{"row":47,"column":26},"action":"insert","lines":["w"],"id":6},{"start":{"row":47,"column":26},"end":{"row":47,"column":27},"action":"insert","lines":["e"]},{"start":{"row":47,"column":27},"end":{"row":47,"column":28},"action":"insert","lines":["l"]},{"start":{"row":47,"column":28},"end":{"row":47,"column":29},"action":"insert","lines":["c"]},{"start":{"row":47,"column":29},"end":{"row":47,"column":30},"action":"insert","lines":["o"]},{"start":{"row":47,"column":30},"end":{"row":47,"column":31},"action":"insert","lines":["m"]},{"start":{"row":47,"column":31},"end":{"row":47,"column":32},"action":"insert","lines":["e"]}],[{"start":{"row":2,"column":36},"end":{"row":3,"column":0},"action":"insert","lines":["",""],"id":7},{"start":{"row":3,"column":0},"end":{"row":4,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":4,"column":0},"end":{"row":4,"column":28},"action":"insert","lines":["use Illuminate\\Http\\Request;"],"id":8}],[{"start":{"row":6,"column":36},"end":{"row":7,"column":0},"action":"insert","lines":["",""],"id":9}]]},"ace":{"folds":[],"scrolltop":268.71875,"scrollleft":0,"selection":{"start":{"row":53,"column":0},"end":{"row":53,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1528808584602,"hash":"aaae956b0c57dfd394c80248443c8cbd0215882a"}