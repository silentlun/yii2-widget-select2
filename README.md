# Yii2 的 Select2 小部件

Select2 jQuery 插件，用于Yii2，具有 Bootstrap 主题功能。

[Select2](https://select2.github.io/) 为您提供了一个可自定义的选择框，支持搜索、标记、远程 数据集、无限滚动和许多其他常用选项。

## 安装

安装此扩展的首选方法是通过 [composer](https://getcomposer.org/download/).

运行

```
php composer.phar require --prefer-dist silentlun/yii2-widget-select2 "*"
```

或添加

```
"silentlun/yii2-widget-select2": "*"
```

添加到 `composer.json` 文件的 require 部分。


## 用法


您可能需要调整 `clientOptions` 和 `clientEvents` 参数。

因此，我们强烈建议您访问 [Select2 Documentation](https://select2.github.io/options.html) 文档，了解 Select2 可用的可能选项，以检查所有可能的选项 显示有关此主题的 Select2 的选项。



### 使用 Select2Widget

```php 
use silentlun\select2\Select2:


// with \yii\bootstrap\ActiveForm;
echo $form
    ->field($model, 'attribute')
    ->widget(
        Select2::class, 
        [
            'items' => $data, // $data 应该与提供给常规 Yi2 DropdownList 的项目相同
            'options' => ['placeholder' => '选择', 'multiple' => true],
            'clientOptions' => ['theme' => 'classic']
        ]
    );
    
// as widget 
echo Select2::widget([
    'name' => 'my-name',
    'value' => 'my-value',
    'clientOptions' => [
        'maximumInputLength' => 20
    ]
]); 
```

