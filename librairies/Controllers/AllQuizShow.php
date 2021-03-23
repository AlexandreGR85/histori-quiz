<?php

namespace Controllers;

class AllQuizShow extends Controller

{
    
  protected $modelName = \Models\Topics::class;
    
   public function index() {
        
        
        $this->tplVars = $this->tplVars + ['TopicsAndPeriods' => $this->model->AllTopicsByPeriods()];
        
         \Renderer::show("all_quiz_show",$this->tplVars);
                
        }
 
}
