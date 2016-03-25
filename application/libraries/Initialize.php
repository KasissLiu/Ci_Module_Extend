<?php


class Initialize
{
    protected $ci = null;
    
    public function __construct()
    {
        $this->ci = &get_instance();
        
        $this->_initSmarty();
       $this->_initServer();
    }
    
    
    public function _initSmarty()
    {
        $this->ci->load->config('smarty');
        $config = $this->ci->config->config['smarty'];
        if(ROUTE_MODE == 'EXTEND')
        {
            $config['template_dir'] = 
                is_dir(APPPATH.'modules/'.$this->ci->router->module.'/views/')? 
                APPPATH.'modules/'.$this->ci->router->module.'/views/' :$config['template_dir'];
        }


        $this->ci->smarty = new Smarty();
        $this->ci->smarty->setTemplateDir($config['template_dir']);
        $this->ci->smarty->setCacheDir($config['compile_dir']);
        $this->ci->smarty->left_delimiter = $config['left_delimiter'];
        $this->ci->smarty->right_delimiter = $config['right_delimiter'];
    }
    
    public function _initServer()
    {
       require_once(APPPATH.'core/MysqliDb.php');
       if(file_exists($db_config = APPPATH.'config/database.php'))
           include $db_config;
        else
          show_error('database config file dosen\'t exist');
        
        $this->ci->mysqli = new MysqliDb($db['localhost']); 
          
        
    }
    
    
    
}