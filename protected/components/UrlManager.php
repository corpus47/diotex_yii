 <?php
/**
 * 
 */
class UrlManager extends CUrlManager
{
    /*public function createUrl($route,$params=array(),$ampersand='&')
    {
        /*if(preg_match('/[A-Z]/',$route)!==0)
        {
            $route=strtolower(preg_replace('/(?<=\\w)([A-Z])/','-\\1',$route));
        }*/
        /*if (!isset($params['lang'])) {
            if (Yii::app()->user->hasState('lang'))
                Yii::app()->language = Yii::app()->user->getState('lang');
            else if(isset(Yii::app()->request->cookies['lang']))
                Yii::app()->language = Yii::app()->request->cookies['lang']->value;
            $params['lang']=Yii::app()->language;
        }
        return parent::createUrl($route,$params,$ampersand);
    }*/

    public function parseUrl($request)
    {
        //var_dump($request);
        $route=parent::parseUrl($request);
        var_dump($route);
        $route_array = explode('/',$route);
        var_dump($route_array);
        /*if(substr_count($route,'-')>0)
        {
            $route=lcfirst(str_replace(' ','',ucwords(str_replace('-',' ',$route))));
        }*/
        
        /* oldal vizsgálat */
        
        foreach($route_array as $slug) {
        	$node_content = Content::Model()->findByAttributes(array('slug'=>$slug));
        	if($node_content != NULL) {
        		$route = 'content/view/id/'.$node_content->id;
        		return $route;
        	}
        }
        
        /* Kategória vizsgálat */
        
        $category = Categories::Model()->findByAttributes(array('slug'=>$route_array[0]));
        /* Ha van oldal slug a kategória mögött */
        if(isset($route_array[1])){
        	$subcategory = Categories::Model()->findByAttributes(array('slug'=>$route_array[1]));
        	if($subcategory != NULL) {
        		$route = 'categories/view/id/'.$category->id;
        	}
        } elseif ($category != NULL){
        	$route = 'categories/view/id/'.$category->id;
        }
        var_dump($route);
      // exit;
        return $route;
    }
}
