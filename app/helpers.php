<?php


if(!function_exists('drawTree')) {
    function drawTree($data, $level = 1)
    {
        foreach($data as $node) {
            if($node->getLevel() === $level) {
                echo '<div style="padding-left:20px">';
                    echo $node->get('name');
                    if($node->hasChildren()) {
                        drawTree($node->getChildren(), $level+1);
                    }
                echo '</div>';
            }
        }
    }
}

if(!function_exists('drawTreeSelect')) {
    function drawTreeSelect($name, $tree, $selectedId = null, $showMain = false) {
    echo '<select name="' . $name . '" class="form-control">';
    if($showMain) {
        echo '<option value="null">--glowna--</option>';
    }
    foreach($tree as $node) {
        $level = ($node->getLevel() - 1) * 4;
        $push = '';
        for($i = 0; $i < $level; $i++) {
            $push .= '&nbsp;';
        }
        $selected = ($node->get('id') == $selectedId) ? 'selected' : '';
        echo '<option ' .  $selected . ' value="' . $node->get('id') . '">' . $push . $node->get('name') . '</option>';
    }
    echo '</select>';
    }
}

if(!function_exists('tree_json')) {
    function tree_json($data) {
        
        foreach ($data as $node){
            $info_dane["id"] = $node->get("id");
             $info_dane["name"] = $node->get("name");
             $info_dane["text"] = $node->get("name");
             $info_dane["parent_id"] = $node->get("parent");
             $dane[] = $info_dane;
         }
   
         foreach($dane as $key => &$value)
            {
               $output[$value["id"]] = &$value;
            }

         foreach($dane as $key => &$value)
            {
               if($value["parent_id"] && isset($output[$value["parent_id"]]))
                   {
                       $output[$value["parent_id"]]["nodes"][] = &$value;
                  }
   
            }

         foreach($dane as $key => &$value)
            {
               if($value["parent_id"] && isset($output[$value["parent_id"]]))
                    {
                       unset($dane[$key]);
                  }
            }
        

        $finalData = [];
        foreach($dane as $item) {
            $finalData[] = $item;
        }
        

         echo json_encode($finalData);

    }
}