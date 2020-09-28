#!/bin/bash

#打包编译功能
policy_connect_dir=/home/rong/www/javadaima/policy-connector
service_policy_dir=/home/rong/www/javadaima/service_policy
read -p "是否需要重新编译policy_connect?（yes or no）   " tmp1
if [[ ${tmp1} =~ 'yes' ]]; then
 echo "==============================开始编译==============================="
 cd $policy_connect_dir
 mvn clean
 #sleep 3s
 mvn package
 echo "====================policy_connect编译完毕，请关注打包结果！！======================"
fi 

read -p "是否需要重新编译service_policy?（yes or no）   " tmp1
if [[ ${tmp1} =~ 'yes' ]]; then
 echo "=============================开始编译================================="
 cd $service_policy_dir
 mvn clean
 #sleep 3s 
 mvn package
 echo "====================service_policy编译完毕，请关注打包结果！！======================"
fi


#部署服务功能
www=/home/rong/www
tomcat1=/home/rong/tomcat-policy-connect/webapps
tomcat2=/home/rong/tomcat-service-policy/webapps
start1=/home/rong/tomcat-policy-connect/bin
start2=/home/rong/tomcat-service-policy/bin
daima1=/home/rong/www/javadaima/policy-connector/target/policy-connector
daima2=/home/rong/www/javadaima/service_policy/target/service_policy
read -p "是否需要重新部署policy_connect服务?（yes or no）   " tmp1
if [[ ${tmp1} =~ 'yes' ]]; then
 echo "=============================开始部署==========================================="
 rm -rf $www/policy-connector
 cp -r $daima1 $www
 echo "============================policy_connect已部署到www下========================="
 cd $tomcat1
 rm -rf *
 #cp -r $daima1 $tomcat1
 #cp -r policy-connector ROOT
 echo "============================policy_connect已部署到romcat下======================"
 ps -ef | grep policy-connect | grep -v grep | awk '{print $2}' | xargs kill -9
 cd $start1
 sh startup.sh
 #tail -f $tomcat1/../logs/catalina.out
 echo "======================policy_connect服务重启完毕，请关注日志结果！！============"
fi


read -p "是否需要重新部署service_policy服务?（yes or no）   " tmp1
if [[ ${tmp1} =~ 'yes' ]]; then
 echo "=============================开始部署==========================================="
 cd $tomcat2
 rm -rf *
 cp -r $daima2 $tomcat2
 cp -r service_policy ROOT
 echo "==========================service_policy已部署到romcat下========================"
 ps -ef | grep service-policy | grep -v grep | awk '{print $2}' | xargs kill -9
 cd $start2
 sh startup.sh
 #tail -f $tomcat1/../logs/catalina.out
 echo "==========================service_policy服务重启完毕，请关注日志结果！！========"
fi
