<?php

class Stops {

        public function getDirection($lineID,$startID,$endID) {
            //Grab all the stops for a line excluding the city
            $stops = $this->lineLookup($lineID);
            $startInt = $stops[$startID];
            $endInt = $stops[$endID];
            if (!$startInt) {
                $startInt = 50;
            }
            if (!$endInt) {
                $endInt = 50;
            }
            //Now work out direction
            if ($startInt > $endInt) {
                $directionID = $lineID;
            }
            else {
                $directionID = 0;
            }

            return $directionID;
        }


        private function lineLookup($lineID) {
            //All lines in order to the city Lines Stop at last stop before city
            // City needs to be handled in different way
            switch($lineID) {
                case 1:
                    $lineArray = array('1002' => 1,'1010' => 2, '1031' => 3, '1087' => 4, '1213' => 5, '1166' => 6, '1032' => 7, '1012' => 8, '1080' => 9,
                    '1090' => 10, '1030' => 11, '1059' => 12, '1162' => 13);
                    break;
                case 2:
                    $lineArray = array('1018' => 1, '1191' => 2, '1200' => 3, '1199' => 4, '1067' => 5, '1025' => 6, '1016' => 7, '1092' => 8, '1163' => 9,
                    '1091' => 10, '1128' => 11, '1148' => 12, '1023' => 13, '1111' => 14, '1026' => 15, '1129' => 16, '1189' => 17, '1037' => 18,
                    '1033' => 19, '1057' => 20, '1032' => 21, '1012' => 22, '1080' => 23,'1090' => 24, '1030' => 25, '1059' => 26, '1162' => 27);
                    break;
                case 3:
                    $lineArray = array('1044' => 1, '1219' => 2, '1221' => 3, '1028' => 4, '1102' => 5, '1082' => 6, '1149' => 7, '1156' => 8, '1186' => 9,
                    '1079' => 10, '1064' => 11, '1131' => 12, '1009' => 13, '1140' => 14, '1108' => 15, '1144' => 16);
                    break;
                case 4:
                    //Dandynong and Yarraman have same stopID from the API
                    $lineArray = array('1045' => 1, '1123' => 2, '1222' => 3, '1049' => 4, '1049' => 5, '1142' => 6, '1172' => 7, '1183' => 8, '1208' => 9,
                    '1040' => 10, '1099' => 11, '1150' => 12, '1098' => 13, '1138' => 14, '1034' => 15, '1036' => 16,
                    '1118' => 17, '1008' => 18, '1194' => 19, '1089' => 20, '1180' => 21, '1162' => 22);
                    break;
                case 6:
                    $lineArray = array('1073' => 1, '1106' => 2, '1174' => 3, '1035' => 4, '1024' => 5, '1038' => 6, '1060' => 7, '1011' => 8, '1134' => 9,
                    '1154' => 10, '1122' => 11, '1039' => 12, '1095' => 13, '1132' => 14, '1157' => 15, '1020' => 16,
                    '1119' => 17, '1152' => 18, '1081' => 19, '1036' => 20,'1118' => 21, '1008' => 22, '1194' => 23, '1089' => 24, '1180' => 25, '1162' => 26);
                    break;
                case 7:
                    $lineArray = array('1078' => 1, '1190' => 2, '1137' => 3, '1105' => 4, '1096' => 5, '1058' => 6, '1051' => 7, '1077' => 8, '1075' => 9,
                    '1195' => 10, '1110' => 11, '1094' => 12, '1030' => 13, '1059' => 14, '1162' => 15);
                    break;
                case 8:
                    $lineArray = array('1100' => 1, '1204' => 2, '1054' => 3, '1062' => 4, '1130' => 5, '1084' => 6, '1203' => 7, '1117' => 8, '1168' => 9,
                    '1093' => 10, '1056' => 11, '1101' => 12, '1050' => 13, '1004' => 14, '1065' => 15, '1053' => 16,
                    '1209' => 17, '1041' => 18, '1201' => 19, '1043' => 20,'1145' => 21, '1207' => 22, '1104' => 23);
                    break;
                case 9:
                    $lineArray = array('1115' => 1, '1133' => 2, '1048' => 3, '1164' => 4, '1163' => 5,
                    '1091' => 6, '1128' => 7, '1148' => 8, '1023' => 9, '1111' => 10, '1026' => 11, '1129' => 12, '1189' => 13, '1037' => 14,
                    '1033' => 15, '1057' => 16, '1032' => 17, '1012' => 18, '1080' => 19,'1090' => 20, '1030' => 21, '1059' => 22, '1162' => 23);
                    break;
                case 11:
                    $lineArray = array('1153' => 1, '1223' => 2, '1151' => 3, '1017' => 4, '1021' => 5, '1139' => 6, '1085' => 7,'1049' => 8, '1142' => 9, '1172' => 10,
                    '1183' => 11, '1208' => 12,'1040' => 13, '1099' => 14, '1150' => 15, '1098' => 16, '1138' => 17, '1034' => 18, '1036' => 19,
                    '1118' => 20, '1008' => 21, '1194' => 22, '1089' => 23, '1180' => 24, '1162' => 25);
                    break;
                case 12:
                    $lineArray = array('1173' => 1, '1086' => 2, '1027' => 3, '1126' => 4, '1143' => 5, '1074' => 6, '1061' => 7, '1165' => 8, '1013' => 9,
                    '1214' => 10, '1158' => 11, '1036' => 12, '1180' => 13, '1162' => 14);
                    break;
                case 5:
                    $lineArray = array('1224' => 1, '1063' => 2, '1112' => 3, '1192' => 4, '1109' => 5,
                    '1171' => 6, '1161' => 7, '1160' => 8, '1159' => 9, '1019' => 10, '1193' => 11, '1047' => 12, '1147' => 13, '1125' => 14,
                    '1170' => 15, '1041' => 16, '1201' => 17, '1043' => 18,'1145' => 19, '1207' => 20, '1104' => 21);
                    break;
                case 14:
                    $lineArray = array('1187' => 1, '1055' => 2, '1202' => 3, '1107' => 4, '1184' => 5, '1076' => 6, '1003' => 7,'1218' => 8, '1196' => 9, '1206' => 10,
                    '1127' => 11, '1072' => 12,'1144' => 13);
                    break;
                case 15:
                    $lineArray = array('1198' => 1, '1083' => 2, '1066' => 3, '1124' => 4, '1014' => 5, '1042' => 6, '1135' => 7,'1006' => 8, '1029' => 9, '1103' => 10,
                    '1169' => 11, '1069' => 12,'1116' => 13, '1144' => 14);
                    break;
                case 16:
                    $lineArray = array('1205' => 1, '1097' => 2, '1225' => 3, '1220' => 4, '1113' => 5, '1210' => 6, '1005' => 7,'1175' => 8, '1141' => 9, '1182' => 10,
                    '1216' => 11, '1176' => 12,'1072' => 13, '1179' => 14, '1144' => 15);
                    break;
                case 17:
                    $lineArray = array('1211' => 1, '1212' => 2, '1146' => 3, '1141' => 4, '1182' => 5, '1216' => 6, '1176' => 7,'1072' => 8, '1179' => 9, '1144' => 10);
                    break;
            }
            return $lineArray;
        }

}

?>
