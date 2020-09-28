 #!/bin/bash

 dir=/home/rong/yangyangtest
echo "==输出行数，字数，字符数==========="
cd $dir
 wc -lwc text

echo "==单词顺序降序==========="

cat text |sed 's#[^a-zA-Z]#\n#g'|grep -v "^$"|sort|uniq -c|sort -rn -k1 |tee shunxu.txt

echo "==字母顺序降序==========="
  
cat text |grep -o "."|egrep -v "[^a-zA-Z]"|sort|uniq -c|sort -rn -k1|tee shunxu2.txt

echo "==空格替换成、==========="


cat text | sed 's/[ ][ ]*/、/g'
