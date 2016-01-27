#El usuario CDmon es js_cmd y la contraseña B.lack14
#Utilizar la contraseña B.lack14 y para la SSH Key "despliegue"
#Este comando ejecuta un proceso ssh para conectar a la ip indicada con un usuario, y una vez logeado se ejectutan las siguientes instrucciones.
git add --all && git commit -m "$1" && git push origin master
ssh  jscmdesp@185.42.104.219 -t " 
cd /web/produccion/ &&
sh ../Server_PUESTA_EN_PRODUCCION.sh; bash"
