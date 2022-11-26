<?php
class Template
{
    private $content;
    private $data;

    public function __construct( $filename)
    {
        if (file_exists($filename)) {
            $this->content = file_get_contents($filename);
        } else {
            $this->content = "";
        }
    }

    public function setData(array $data)
    {
        $this->data = $data;
    }


    public function render()
    {
        $content = $this->content;
        foreach ($this->data as $key => $val) {
            $content = str_replace("~$key~", $val, $content);
        }
        return $content;
    }
}
