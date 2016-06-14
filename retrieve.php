<?php
/**
 * 遍历目录，生成所需格式的文件
 * [目录名]()
 *   * [文件名](文件所在路径)
 *   ...
 */
$dir = 'Everyday';  // 主目录

$str = <<<EOF

#MDWiki

[Home](index.md)

EOF;

// 遍历目录，输出所需的字符串格式，实现动态更新菜单
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            if ($file != '.' && $file != '..' && $file != '.tags' && $file != '.tags1' && filetype($dir . DIRECTORY_SEPARATOR . $file) == 'dir') {
                $str .= getMDWikiMenu($dir . DIRECTORY_SEPARATOR . $file);
            }
        }
        closedir($dh);
    }
}


$str .= <<<EOF

[gimmick:theme (inverse: false)](bootstrap)

[gimmick:ThemeChooser](Change theme)

[About](about.md)

EOF;

/**
 * 将生成的字符串写入文件
 */
$str = iconv('gbk', 'utf-8', $str);
file_put_contents('navigation.md', $str);


/**
 * 将指定目录按指定格式生成字符串
 * @method getMDWikiMenu
 * @param  [type]        $dir [description]
 * @return [type]             [description]
 */
function getMDWikiMenu($dir) {
    $absolutePath = __DIR__ . DIRECTORY_SEPARATOR . $dir;   // 绝对路径
    if (is_dir($absolutePath)) {
        $str = "\n[" . explode(DIRECTORY_SEPARATOR, $dir)[1] . "]()\n\n";   // 生成菜单中的 [菜单]() 部分
        if ($dh = opendir($absolutePath)) {
            while (($file = readdir($dh)) != false) {
                if ($file != '.' && $file != '..' && $file != '.tags' && $file != '.tags1' && filetype($absolutePath . DIRECTORY_SEPARATOR . $file) == 'file') {
                    $str .= "  * [" . explode('.', $file)[0] . "]($dir" . DIRECTORY_SEPARATOR . "$file)\n";     // 生成二级菜单和可访问的条目
                }
            }
        }
        return $str;
    }
}
