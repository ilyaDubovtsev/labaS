<?php
date_default_timezone_set('Europe/Kiev'); //т.к. не на всех хостингах мы имеем доступ к настройкам php, мы будем задавать текущий timezone таким способом

$RSAprivateKey = "<RSAKeyValue><Modulus>spbrbTAXSfxySKiJ8QEtkrYi9pUShBm0ZFusyrnltNlRkH4ziVhDsE4I7FhqSyfQFHAjhxTF+1OaZDZZZKHMzHE7RHPSAKj/zRN0dGNvoceLqPTO+nbL/R+WwVAcKG7IGGut5OWoFwupHCGutZJcmnxeEaHSIjHZ8RSIssB2wwaaPA5MwApthG1hLdgqKJ3kQaUbWhTGwpMr/833tSgNUSa03yxotq/CSB33DRNayU1YDeWR25iiFKqLx5KdkdQyHBBn3JVWoMXbpAjQ+4ToRYb0t37ZMLcwPtv6tPrbwaI7SJgbmx4RsG4yF8MXE/oBvdCehwz0Fqjabc1aztwyqQ==</Modulus><Exponent>AQAB</Exponent><P>z5pOnOLXhZJVd8SZmmvLDL1jtfS+JAsSMLxKpwd6cEroA2z2YSFAiBudUKr9ka81FzqkvPQEV1P8EDOUF1TdwAOAE5GaZR5mDC1fAhpD7BMl/tfz4PA6QIAx8jNhCG8I3JePRf4bbZnsSMG8lQ9k4z5rhy6R9Ejg488ZIoaatc8=</P><Q>3DkbwlKbZhYtJBpUR+21pgg5WHs65TCayjuuMPMZk+ROT0gfs1a3rs7RVA0dg3GSaSP7KobeTru4wzHIZJ80lOuQq00AiqVaglihpuSSSHymjXXHKOKL0c1wddnUUqXKdE8Y6He8TwRPxQy5z5CsyC5ZtLkAoPSbIUmSPCGzpgc=</Q><DP>SUXCN1dNEETcy5/lQv6GtSFnPwJ51cjei7r5ckiOa3HUv9jGgPO2jhOJC76+LpwzVdaJ7HMH0TbAQYui2jVG6w2RN9btMoFvLR8aaGiSzpDXmUHpPtwrAzb76es+dTaTXyBTHjYYwi9QmUFf6RB84EPYueay9xB954nh6jCuDDs=</DP><DQ>abAOnme+pHOoHld0c0ClmJUB0HDzhuKYps2Vf3Brqgo7etkGPa80X/RpiYjxzQ9IUKUv+OzY67gzp5nQrlmphn624z8FL4TDtyKKEepIOfl4hRMtDXYL3BhYDHcJ6tAeJUuAjLBJ8zIChnLhCbhI85kq/Ax9PMGnYYZJZApYiSk=</DQ><InverseQ>A9zw8WW1Hu2TrmfF+CefVA91XRevVw3Nts1KD7udxdpEqL1KkH14JlyK9WGHLysCZTivclCGLV3Yjsmq/6yo6QCAqB8ybDa+I8/2E7qSYLOm1fcMjA6v5fDwaACJhfUKaDtdco6mbW7xOWY9m86Xf88g5CoL7mzcyGXTjQsy0V4=</InverseQ><D>G1F8t9oYZefo73Zgi247s2qLFJ8fEvf/oS5o0yX2nmBz2p+DcKoAyLJXKRgpQk/Xw5iXxq0Fz/ks79FkgUFC268ieskgwZsYbh1gvgEL7XphwbmZA7UyZQj0/aMse37euuWV1yLOQKA3ASeh2wKFidgmZ5oSU8q+ZONYOce5IwHZGkahKocchTB3eCfcTjFQBYIRv6n4pu8FZwZR8S996iQkT/3UazeWaQFNndPQjAPVR2lns52C7JtN1jAjmkcydxSwnBE2tO5/qm1i+IMc2FqoaC1cxikBBIpjBajvkv+f2NVjuET29G6ZIGFMFvDea01Li8ujQKNcCsbFFHyz9Q==</D></RSAKeyValue>"; //Тут мы храним приват ключ RSA

$MySQL_hostname = "sql7.freesqldatabase.com"; //Адрес сервера MySQL
$MySQL_username = "sql7383292"; //Имя пользователя MySQL
$MySQL_password = "LiQhRNnKUs"; //Пароль для пользователя MySQL
$MySQL_databasename = "sql7383292"; //База данных MySQL
$MySQL_table = "Sonya"; //Таблица MySQL
?>