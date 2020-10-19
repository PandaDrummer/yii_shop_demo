<?php
namespace app\models;

use Yii;
use yii\base\Model;
use yii\debug\models\search\Mail;
use yii\web\UploadedFile;

class ImageUpload extends  Model{

    public $image ;


    public function uploadFile(UploadedFile $file,$currentimg){
        if($currentimg!=NULL){
            if (file_exists('uploads/' . $currentimg)) {
                unlink(Yii::getAlias('@web').'uploads/' . $currentimg);
            }
        }

        $uniqname = uniqid($file->baseName) . '.' . $file->extension;
        $file->saveAs('uploads/' . $uniqname);
        return $uniqname;
    }
    public function deleteCurrentimg($currentimg){

        unlink('uploads/' . $currentimg);
    }

}