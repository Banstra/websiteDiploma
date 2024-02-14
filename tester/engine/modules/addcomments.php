<?php
/*
=====================================================
 DataLife Engine - by SoftNews Media Group 
-----------------------------------------------------
 https://dle-news.ru/
-----------------------------------------------------
 Copyright (c) 2004,2023 SoftNews Media Group
-----------------------------------------------------
 You use Demo Version of DataLife Engine
=====================================================
*/
?><?php $_F=__FILE__;$_X='P3dBP1lXWVEwKlE1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NVEyUEYxRnl2N3Uyb21Jdm11Mi0yRDwyCn03MSB1VDQybnVsdkYyT3F9alkyUS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tUTJXMTFZNDowMGxadS1tdVQ0Q3FqMFEtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVEyeH1ZPHF2SVcxMihOKTJoU1NdLWhTaGQyCn03MSB1VDQybnVsdkYyT3F9allRNTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTVRMi9XdjQyTn1sdTJ2NDJZcX0xdU4xdWwyRDwyTn1ZPHF2SVcxUTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1UTJLdlp1OjJGbGxOfUpKdW0xNENZV1lRLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS1RMmU0dToyR2xsdm1JMk59Skp1bTE0MjF9MjFXdTJsRjFGREY0dVE1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NTU1NVEqMFFRdjcoMiFsdTd2bXVsKCdQRy9HeS5Lb28gTy4gbycpMns4MiEkTn1tN3ZJYidGWlp9VF9OfUpKdW0xNCdCMikySFEJV3VGbHVxKDIici8vdDBSQ1IyXVNkMkt9cUR2bGx1bSIyKTtRCVd1Rmx1cTIoMid5fU5GMXZ9bToyQ0MwQ0MwJzIpO1EJbHZ1KDIickZOOXZtSTJGMTF1SlkxISIyKTtRcFFRdjcoMiROfW03dkliJ0ZaWn1UX059Skp1bTE0X1Q8NHZUPEknQjJ3MlMyKTJIUQlRCSRGWlp9VHVsXzFGSTQyNTJGcXFGPDIoJ2x2M2JGWnZJbXw0MTxadXxOWkY0NHxsRjFGLU59Skp1bTExdkp1fGxGMUYtTn1KSnVtMWo0dXF8Tn1tMXVtMXVsdjFGRFp1QicsMic0WUZtYjQxPFp1fE5aRjQ0fGxGMUYtajR1cWpxWnxsRjFGLWo0dXFtRkp1fE59bTF1bTF1bHYxRkRadUInLDInWWJGWnZJbXw0MTxadXxOWkY0NEInLDInWXF1Yk5aRjQ0QicsMidOfWx1JywyJ0RxJywyJzQxcX1tSScsMid1SicsMidqWicsMidadicsMid9WicsMidEJywyJ2onLDIndicsMic0JywyJ1dxJzIpO1EJUQl2NygyJGo0dXFfSXF9alliJEp1SkR1cV92bGInajR1cV9JcX1qWSdCQmInRlpafVRfanFaJ0IyKTIkRlpafVR1bF8xRkk0YkIyNTInRmJXcXU3fDFGcUl1MXw0MTxadXxOWkY0NHwxdjFadUInO1EJdjcoMiRqNHVxX0lxfWpZYiRKdUpEdXFfdmxiJ2o0dXFfSXF9alknQkJiJ0ZaWn1UX3ZKRkl1J0IyKTIkRlpafVR1bF8xRkk0YkIyNTIndkpJYjQxPFp1fE5aRjQ0fDRxTnxGWjF8VHZsMVd8V3V2SVcxQic7UQlRCSRZRnE0dTI1Mm11VDJ0RnE0dUt2WjF1cSgyJEZaWn1UdWxfMUZJNDIpO1EJJFlGcTR1LXdUPDR2VDxJMjUyMXFqdTtRCVFwMnVaNHUySFEJUQkkWUZxNHUyNTJtdVQydEZxNHVLdloxdXEoKTtRCVFwUVEkWUZxNHUtdzRGN3VfSn1sdTI1MjFxanU7USRZRnE0dS13cXVKfTN1X1cxSloyNTI3Rlo0dTtRJFlGcTR1LXdGWlp9VF9qcVoyNTIkajR1cV9JcX1qWWIkSnVKRHVxX3ZsYidqNHVxX0lxfWpZJ0JCYidGWlp9VF9qcVonQjtRJFlGcTR1LXdGWlp9VF92SkZJdTI1MiRqNHVxX0lxfWpZYiRKdUpEdXFfdmxiJ2o0dXFfSXF9alknQkJiJ0ZaWn1UX3ZKRkl1J0I7USRZRnE0dS13RlpafVRfM3ZsdX0yNTIkajR1cV9JcX1qWWIkSnVKRHVxX3ZsYidqNHVxX0lxfWpZJ0JCYiczdmx1fV9OfUpKdW0xNCdCO1EkWUZxNHUtd0ZaWn1UX0p1bHZGMjUyJGo0dXFfSXF9alliJEp1SkR1cV92bGInajR1cV9JcX1qWSdCQmInSnVsdkZfTn1KSnVtMTQnQjtRUSRfLy5ubzI1MjF2SnUoKTtRJF8udDI1Mkl1MV92WSgpO1FRJG1GSnUyNTIkbEQtdzRGN3U0VlooMlcxSlo0WXVOdkZaTldGcTQoNDFxdllfMUZJNCgyMXF2SigyJF90ewovYidtRkp1J0IyKTIpLDJvIC9femV7L28KLDIkTn1tN3ZJYidOV0ZxNHUxJ0IyKTIpO1FRJG19MV9GWlp9VF80PEpEfVoyNTJGcXFGPDIoIlxjaGgiLDIiXGNnUyIsMiJcMSIsMidcbScsMidccScsMiJcbSIsMiJccSIsMidcXCcsMiIsIiwyIjAiLDIiIyIsMiI7IiwyIjoiLDIifiIsMiJiIiwyIkIiLDIiSCIsMiJwIiwyIikiLDIiKCIsMiIqIiwyIl4iLDIiJSIsMiIkIiwyIkEiLDIidyIsMiI/IiwyIiEiLDInIicsMiInIiwyIjIiLDIiJiIyKTtRJEpGdloyNTIkbEQtdzRGN3U0VlooMXF2SigyNDFxX3F1WVpGTnUoMiRtfTFfRlpafVRfNDxKRH1aLDInJywyNDFxdllfMUZJNCgyNDFxdlk0WkY0V3U0KDIkX3R7Ci9iJ0pGdlonQjIpMikyKTIpMik7UVEkWX00MV92bDI1MnZtMTNGWigyJF90ewovYidZfTQxX3ZsJ0IyKTtRJDQxfVkyNTJGcXFGPDIoKTtRJEZsbHVsX059Skp1bTE0X3ZsMjUyUztRUXY3KDIkdjRfWn1JSXVsMikySFEJJG1GSnUyNTIkbEQtdzRGN3U0VlooJEp1SkR1cV92bGInbUZKdSdCKTtRCSRKRnZaMjUyJGxELXc0Rjd1NFZaKCRKdUpEdXFfdmxiJ3VKRnZaJ0IpO1FwMnVaNHUySFEJUQl2NygydjRfRnFxRjwoJERGbW11bF92bTd9YidtRkp1J0IpMkcgUDJOfWptMSgyJERGbW11bF92bTd9YidtRkp1J0IyKTIpMjd9cXVGTlcyKDIkREZtbXVsX3ZtN31iJ21GSnUnQjJGNDIkREZtbXVsMikySFFRCQkkREZtbXVsYidtRkp1J0IyNTI0MXFfcXVZWkZOdSgyJ1wqJywyJ0MqJywyWXF1SV9Wan0xdSgyJERGbW11bGInbUZKdSdCLDIiIyIyKTIpO1FRCQl2NygyJERGbW11bGInbUZKdSdCMkZtbDJZcXVJX0pGMU5XKDIiI15IJERGbW11bGInbUZKdSdCcCQjdiIsMiRtRkp1MikyKTJIUVEJCQl2NygyJERGbW11bGInbHU0TnEnQjIpMkhRCQkJCSRaRm1JYidxdUlfdXFxX2hSJ0IyNTI0MXFfcXVZWkZOdSgyIkhsdTROcXAiLDIkWkZtSWIncXVJX3VxcV9oaCdCLDIkWkZtSWIncXVJX3VxcV9oUidCMik7UQkJCQkkWkZtSWIncXVJX3VxcV9oUidCMjUyNDFxX3F1WVpGTnUoMiJIbHU0TnFwIiwyJERGbW11bGInbHU0TnEnQiwyJFpGbUliJ3F1SV91cXFfaFInQjIpO1EJCQlwMnVaNHVRCQkJCSRaRm1JYidxdUlfdXFxX2hSJ0IyNTI0MXFfcXVZWkZOdSgyIkhsdTROcXAiLDIiIiwyJFpGbUliJ3F1SV91cXFfaFInQjIpO1FRCQkJJDQxfVliQjI1MiRaRm1JYidxdUlfdXFxX2hSJ0I7UQkJCSR4IF9yR3kvMjUyLzhlbztRCQlwUQlwUQlRCXY3KDJ2NF9GcXFGPCgkREZtbXVsX3ZtN31iJ3VKRnZaJ0IpMkcgUDJOfWptMSgyJERGbW11bF92bTd9Yid1SkZ2WidCMikyKTI3fXF1Rk5XMigyJERGbW11bF92bTd9Yid1SkZ2WidCMkY0MiRERm1tdWwyKTJIUVEJCSRERm1tdWxiJ3VKRnZaJ0IyNTI0MXFfcXVZWkZOdSgyJ1wqJywyJ0MqJywyWXF1SV9Wan0xdSgyJERGbW11bGIndUpGdlonQiwyIiMiMikyKTtRUQkJdjcoMiRERm1tdWxiJ3VKRnZaJ0IyRyBQMllxdUlfSkYxTlcoMiIjXkgkREZtbXVsYid1SkZ2WidCcCQjdiIsMiRKRnZaMikyKTJIUVEJCQl2NygyJERGbW11bGInbHU0TnEnQjIpMkhRCQkJCSRaRm1JYidxdUlfdXFxX2hkJ0IyNTI0MXFfcXVZWkZOdSgyIkhsdTROcXAiLDIkWkZtSWIncXVJX3VxcV9oaCdCLDIkWkZtSWIncXVJX3VxcV9oZCdCMik7UQkJCQkkWkZtSWIncXVJX3VxcV9oZCdCMjUyNDFxX3F1WVpGTnUoMiJIbHU0TnFwIiwyJERGbW11bGInbHU0TnEnQiwyJFpGbUliJ3F1SV91cXFfaGQnQjIpO1EJCQlwMnVaNHVRCQkJCSRaRm1JYidxdUlfdXFxX2hkJ0IyNTI0MXFfcXVZWkZOdSgyIkhsdTROcXAiLDIiIiwyJFpGbUliJ3F1SV91cXFfaGQnQjIpO1FRCQkJJDQxfVliQjI1MiRaRm1JYidxdUlfdXFxX2hkJ0I7UQkJCSR4IF9yR3kvMjUyLzhlbztRCQlwUQlwUQlRcFFRdjcoMiF2NDR1MSgkXzhvemVvCi9iJ2o0dXFfV0Y0VydCKTJ7ODIhJF84b3plbwovYidqNHVxX1dGNFcnQjJ7ODIkXzhvemVvCi9iJ2o0dXFfV0Y0VydCMiE1MiRsWnVfWn1Jdm1fV0Y0VzIpMkhRUQkkNDF9WWJCMjUyJFpGbUliJzR1NDRfdXFxfXEnQjtRCSR4IF9yR3kvMjUyLzhlbztRCVFwUQlRdjcyKDIkajR1cV9JcX1qWWIkSnVKRHVxX3ZsYidqNHVxX0lxfWpZJ0JCYic0WUZKN3ZaMXVxJ0IyKTJIUVEJJHF9VDI1MiRsRC13NGpZdXFfVmp1cTwoMiIKb3lveC8yKjJLOHtuMiIyQzJ0OG9LLjYyQzIiXzRZRkpfWn1JMmlybzhvMnZZMjUyJ0gkXy50cCciMik7UVEJdjcyKDIhJHF9VGIndmwnQjJ7ODIhJHF9VGIndUpGdlonQjIpMkhRUQkJJDQ3NDI1Mm11VDIKMX1ZCllGSigkTn1tN3ZJYic0WUZKX0ZZdl85dTwnQiwyJGo0dXFfSXF9alliJEp1SkR1cV92bGInajR1cV9JcX1qWSdCQmInNFlGSjd2WjF1cSdCMik7UQkJJEZxSTQyNTJGcXFGPCgndlknMjV3MiRfLnQsMid1SkZ2WicyNXcyJEpGdlopO1FRCQl2NzIoJDQ3NC13djRfNFlGSkp1cSgyJEZxSTQyKSkySFFRCQkJdjcyKDIhJHF9VGIndmwnQjIpMkhRCQkJCSRsRC13Vmp1cTwoMiIuIApvOC8yLiAvezIiMkMydDhvSy42MkMyIl80WUZKX1p9STIodlksMnY0XzRZRkpKdXEsMnVKRnZaLDJsRjF1KTJmR3llbwoyKCdIJF8udHAnLCdSJywyJ0gkSkZ2WnAnLDInSCRfLy5ub3AnKSIyKTtRCQkJcDJ1WjR1MkhRCQkJCSRsRC13Vmp1cTwoMiJldFBHL28yIjJDMnQ4b0suNjJDMiJfNFlGSl9afUkyCm8vMnY0XzRZRkpKdXE1J1InLDJ1SkZ2WjUnSCRKRnZacCcyaXJvOG8ydmw1J0gkcX1UYid2bCdCcCciMik7UQkJCXBRUQkJCSQ0MX1ZYkIyNTIkWkZtSWIncXVJX3VxcV9oRSdCQyIyIjtRCQkJJHggX3JHeS8yNTIvOGVvO1FRCQlwMnVaNHUySFEJCQl2NzIoMiEkcX1UYid2bCdCMikySFEJCQkJJGxELXdWanVxPCgyIi4gCm84LzIuIC97MiIyQzJ0OG9LLjYyQzIiXzRZRkpfWn1JMih2WSwydjRfNFlGSkp1cSwydUpGdlosMmxGMXUpMmZHeWVvCjIoJ0gkXy50cCcsJ1MnLDInSCRKRnZacCcsMidIJF8vLm5vcCcpIjIpO1EJCQlwMnVaNHUySFEJCQkJJGxELXdWanVxPCgyImV0UEcvbzIiMkMydDhvSy42MkMyIl80WUZKX1p9STIKby8ydUpGdlo1J0gkSkZ2WnAnMmlybzhvMnZsNSdIJHF9VGIndmwnQnAnIjIpO1EJCQlwUQkJcFEJUQlwMnVaNHUySFFRCQl2NzIoJHF9VGIndjRfNFlGSkp1cSdCKTJIUVEJCQkkNDF9WWJCMjUyJFpGbUliJ3F1SV91cXFfaEUnQkMiMiI7UQkJCSR4IF9yR3kvMjUyLzhlbztRCQlRCQlwUVEJcFFRcFFRdjcyKCR2NF9afUlJdWwyRyBQMiROfW03dkliJ059Skp1bTE0X3F1NDFxdk4xdWwnQjJHIFAyKCgkXy8ubm8yLTIkSnVKRHVxX3ZsYidxdUlfbEYxdSdCKTJBMigkTn1tN3ZJYidOfUpKdW0xNF9xdTQxcXZOMXVsJ0IyKjI+Z11TUykpMikySFEJJDQxfVliQjI1MjQxcV9xdVlaRk51KDInSGxGPDRwJywydm0xM0ZaKCROfW03dkliJ059Skp1bTE0X3F1NDFxdk4xdWwnQiksMiRaRm1JYidtdVQ0X3ZtN31fPidCMik7UQkkeCBfckd5LzI1Mi84ZW87UXBRUXY3KDIkTn1tN3ZJYic0dkpZWnVfcXVZWjwnQjI1NTIiaCIyRyBQMiRfdHsKL2InWUZxdW0xJ0IyKTIkTn1tN3ZJYidGWlp9VF9OfUpKdW0xNF9UPDR2VDxJJ0IyNTIiLVIiO1FRdjcoMiROfW03dkliJ0ZaWn1UX059Skp1bTE0X1Q8NHZUPEknQjJ3MlMyKTJIUQlRCSROfUpKdW0xNDI1MiRZRnE0dS13TExfdEZxNHUoMiRZRnE0dS13WXF9TnU0NCgyMXF2SigkX3R7Ci9iJ059Skp1bTE0J0IpMikyKTtRCVFwMnVaNHUySFEJCVEJdjcyKCROfW03dkliJ0ZaWn1UX059Skp1bTE0X1Q8NHZUPEknQjI1NTIiLVIiKTIkWUZxNHUtd0ZaWn1UREROfWx1NDI1MjdGWjR1O1EJCVEJJE59Skp1bTE0MjUyJFlGcTR1LXdMTF90RnE0dSgyJFlGcTR1LXdZcX1OdTQ0KDIxcXZKKCRfdHsKL2InTn1KSnVtMTQnQjIpKSwyN0ZaNHUyKTtRcFFRdjcoMnZtMTNGWigkTn1tN3ZJYidOfUpKdW0xNF9Kdm1adW0nQikyRyBQMiEkWUZxNHUtdzd9am1sX0p1bHZGX059bTF1bTEyRyBQMmxadV80MXFadW0oMjQxcV9xdVlaRk51KCIyIiwyIiIsMjQxcXZZXzFGSTQoMXF2SigkTn1KSnVtMTQpKSksMiROfW03dkliJ05XRnE0dTEnQjIpMkEyJE59bTd2SWInTn1KSnVtMTRfSnZtWnVtJ0IyKTJIUVEJJDQxfVliQjI1MiRaRm1JYidtdVQ0X3VxcV9dUydCO1EJJHggX3JHeS8yNTIvOGVvO1FRcFFRdjcoMiRqNHVxX0lxfWpZYiRKdUpEdXFfdmxiJ2o0dXFfSXF9alknQkJiJ0pGY19OfUpKdW0xX2xGPCdCMikySFFRCSQxV3Y0XzF2SnUyNTIkXy8ubm8yLTI+Z11TUztRCSRsRC13Vmp1cTwoMiJQb3lvL28ySzh7bjIiMkMydDhvSy42MkMyIl80dW1sWn1JMmlybzhvMmxGMXUyQTInJDFXdjRfMXZKdScyRyBQMjdaRkk1J2QnIjIpO1FRCXY3MigyISR2NF9afUlJdWwyKTIkTld1TjlfajR1cTI1MiRfLnQ7MnVaNHUyJE5XdU45X2o0dXEyNTIkbEQtdzRGN3U0VlooJEp1SkR1cV92bGInbUZKdSdCKTtRUQkkcX1UMjUyJGxELXc0all1cV9WanVxPCgiCm95b3gvMnh7ZSAvKCopMkY0Mk59am0xMks4e24yIjJDMnQ4b0suNjJDMiJfNHVtbFp9STJpcm84bzJqNHVxMjUyJ0gkTld1TjlfajR1cXAnMkcgUDI3WkZJNSdkJyIpO1EJCVEJdjcoMiRxfVRiJ059am0xJ0IydzUyMiRqNHVxX0lxfWpZYiRKdUpEdXFfdmxiJ2o0dXFfSXF9alknQkJiJ0pGY19OfUpKdW0xX2xGPCdCMikySFEJCVEJCSQ0MX1ZYkIyNTI0MXFfcXVZWkZOdSgnSEpGY3AnLDIkajR1cV9JcX1qWWIkSnVKRHVxX3ZsYidqNHVxX0lxfWpZJ0JCYidKRmNfTn1KSnVtMV9sRjwnQiwyJFpGbUliJ211VDRfdXFxX11NJ0IpO1EJCSR4IF9yR3kvMjUyLzhlbztRCXBRUXBRUXY3MigyJHY0X1p9SUl1bDJHIFAyJGo0dXFfSXF9alliJEp1SkR1cV92bGInajR1cV9JcX1qWSdCQmInbHY0RkRadV9OfUpKdW0xNF9ORlkxTldGJ0IyRyBQMiRKdUpEdXFfdmxiJ059SkpfbWpKJ0IydzUyJGo0dXFfSXF9alliJEp1SkR1cV92bGInajR1cV9JcX1qWSdCQmInbHY0RkRadV9OfUpKdW0xNF9ORlkxTldGJ0IyKTJIUVEJJGo0dXFfSXF9alliJEp1SkR1cV92bGInajR1cV9JcX1qWSdCQmInTn1KSnVtMTRfVmp1NDF2fW0nQjI1MjdGWjR1O1EJJGo0dXFfSXF9alliJEp1SkR1cV92bGInajR1cV9JcX1qWSdCQmInTkZZMU5XRidCMjUyN0ZaNHU7UVFwUVF2NygyJGo0dXFfSXF9alliJEp1SkR1cV92bGInajR1cV9JcX1qWSdCQmInTkZZMU5XRidCMikySFFRCXY3MigkTn1tN3ZJYidGWlp9VF9xdU5GWTFOV0YnQikySFFRCQkkXzhvemVvCi9iJzR1Tl9OfWx1J0IyNTJSO1EJCSRfCm8KCi57IGInNHVOX059bHVfNHU0NHZ9bSdCMjUyN0ZaNHU7UVEJCXY3MigkX3R7Ci9iJ0lfcXVORlkxTldGX3F1NFl9bTR1J0IpMkhRCQkJJHF1eEZZMU5XRjI1Mm11VDI4dXhGWTFOV0YoJE59bTd2SWIncXVORlkxTldGX1lxdjNGMXVfOXU8J0IpO1FRCQkJJHF1NFkyNTIkcXV4RlkxTldGLXczdXF2Nzw4dTRZfW00dSgkXy50LDIkX3R7Ci9iJ0lfcXVORlkxTldGX3F1NFl9bTR1J0IyKTtRCQkJUQkJMjIyMjIyMjJ2NzIoJHF1NFkyITUybWpaWjImJjIkcXU0WS13NGpOTnU0NCkySFFRCQkJCQkkXzhvemVvCi9iJzR1Tl9OfWx1J0IyNTJSO1EJCQkJCSRfCm8KCi57IGInNHVOX059bHVfNHU0NHZ9bSdCMjUyUjtRUQkJMjIyMjIyMjJwUQkJcFFRCXBRUXAydVo0dTJIUQkkXwpvCgoueyBiJzR1Tl9OfWx1XzR1NDR2fW0nQjI1MlI7UQkkXzhvemVvCi9iJzR1Tl9OfWx1J0IyNTJSO1FwUVF2NygyJGo0dXFfSXF9alliJEp1SkR1cV92bGInajR1cV9JcX1qWSdCQmInTn1KSnVtMTRfVmp1NDF2fW0nQjIpMkhRUQl2NzIoMnZtMTNGWigkXwpvCgoueyBiJ1ZqdTQxdn1tJ0IpMikySFEJUQkJJEZtNFR1cTI1MiRsRC13NGpZdXFfVmp1cTwoIgpveW94LzJ2bCwyRm00VHVxMks4e24yIjJDMnQ4b0suNjJDMiJfVmp1NDF2fW0yaXJvOG8ydmw1JyJDdm0xM0ZaKCRfCm8KCi57IGInVmp1NDF2fW0nQilDIiciKTtRCVEJCSRGbTRUdXE0MjUydWNZWn1sdSgyIlxtIiwyJEZtNFR1cWInRm00VHVxJ0IyKTtRCVEJCSRZRjQ0X0ZtNFR1cTI1MjdGWjR1O1EJUQkJdjcoMjdqbU4xdn1tX3VjdjQxNCgnSkRfNDFxMX1afVR1cScpMikySFEJCQkkVmp1NDF2fW1fRm00VHVxMjUyMXF2SihKRF80MXExfVp9VHVxKCRfdHsKL2InVmp1NDF2fW1fRm00VHVxJ0IsMiROfW03dkliJ05XRnE0dTEnQikpO1EJCXAydVo0dTJIUQkJCSRWanU0MXZ9bV9GbTRUdXEyNTIxcXZKKDQxcTF9Wn1UdXEoJF90ewovYidWanU0MXZ9bV9GbTRUdXEnQikpO1EJCXBRCVEJCXY3KDJOfWptMSgkRm00VHVxNCkyRyBQMiRWanU0MXZ9bV9GbTRUdXEyKTJIUQkJCTd9cXVGTlcoMiRGbTRUdXE0MkY0MiRGbTRUdXEyKUhRCVEJCQkJdjcoMjdqbU4xdn1tX3VjdjQxNCgnSkRfNDFxMX1afVR1cScpMikySFEJCQkJCSRGbTRUdXEyNTIxcXZKKEpEXzQxcTF9Wn1UdXEoJEZtNFR1cSwyJE59bTd2SWInTldGcTR1MSdCKSk7UQkJCQlwMnVaNHUySFEJCQkJCSRGbTRUdXEyNTIxcXZKKDQxcTF9Wn1UdXEoJEZtNFR1cSkpO1EJCQkJcFEJUQkJCQl2NygyJEZtNFR1cTJHIFAyJEZtNFR1cTI1NTIkVmp1NDF2fW1fRm00VHVxMikySFEJCQkJCSRZRjQ0X0ZtNFR1cQk1MjFxanU7UQkJCQkJRHF1Rjk7UQkJCQlwUQkJCXBRCQlwUQlRCQl2NygyISRZRjQ0X0ZtNFR1cTIpMkgyJDQxfVliQjI1MiRaRm1JYidxdUlfdXFxX2hdJ0I7MiR4IF9yR3kvMjUyLzhlbzsycFEJUQlwMnVaNHUySDIkNDF9WWJCMjUyJFpGbUliJ3F1SV91cXFfaF0nQjsyJHggX3JHeS8yNTIvOGVvO3BRCQlRcFFRdjcoMiR2NF9afUlJdWwyRm1sMigkSnVKRHVxX3ZsYidxdTQxcXZOMXVsJ0IyNTUyaDJ9cTIkSnVKRHVxX3ZsYidxdTQxcXZOMXVsJ0IyNTUyZCkyKTJIUQlRCSQ0MX1ZYkIyNTIkWkZtSWInbXVUNF92bTd9X2QnQjtRCSR4IF9yR3kvMjUyLzhlbztRUXBRUXY3KDJsWnVfNDFxWnVtKDIkbUZKdSwyJE59bTd2SWInTldGcTR1MSdCMikydzJdUzIpMkhRCSQ0MX1ZYkIyNTIkWkZtSWInbXVUNF91cXFfUidCO1EJJHggX3JHeS8yNTIvOGVvO1FwUVF2NygyWXF1SV9KRjFOVygyIjBiXHx8XCd8XEF8XHd8XGJ8XEJ8XCJ8XCF8XD98XCR8XEB8XCN8XDB8XFxcfFwmXH5cKlxIXCtCMCIsMiRtRkp1MikyKTJIUQkkNDF9WWJCMjUyJFpGbUliJ3F1SV91cXFfXSdCO1EJJHggX3JHeS8yNTIvOGVvO1FwUVF2NygybFp1XzQxcVp1bSgyJEpGdlosMiROfW03dkliJ05XRnE0dTEnQjIpMncyXVMyRyBQMiEkdjRfWn1JSXVsMikySFEJJDQxfVliQjI1MiRaRm1JYidtdVQ0X3VxcV9oJ0I7UQkkeCBfckd5LzI1Mi84ZW87UXBRUXY3KDIhJFl9NDFfdmwyKTJIUQkkNDF9WWJCMjUyJFpGbUliJ211VDRfdXFxX3ZsJ0I7UQkkeCBfckd5LzI1Mi84ZW87UXBRdjcoMmxadV80MXFadW0oMiROfUpKdW0xNCwyJE59bTd2SWInTldGcTR1MSdCMikydzIkTn1tN3ZJYidOfUpKdW0xNF9KRmNadW0nQjIpMkhRCSQ0MX1ZYkIyNTIkWkZtSWInbXVUNF91cXFfZCdCO1EJJHggX3JHeS8yNTIvOGVvO1FwUVF2NygybFp1XzQxcVp1bSgkTn1KSnVtMTQsMiROfW03dkliJ05XRnE0dTEnQikydzJnTVNTUykySFEJJDQxfVliQjI1MiRaRm1JYidtdVQ0X3VxcV9kJ0I7UQkkeCBfckd5LzI1Mi84ZW87UXBRUXY3KDIkXzhvemVvCi9iJzR1Tl9OfWx1J0IyITUyJF8KbwoKLnsgYic0dU5fTn1sdV80dTQ0dn1tJ0IyezgyISRfCm8KCi57IGInNHVOX059bHVfNHU0NHZ9bSdCMikySFEJJDQxfVliQjI1MiRaRm1JYidxdU5GWTFOV0ZfN0Z2WidCO1EJJHggX3JHeS8yNTIvOGVvO1FwUVF2NygyJE59Skp1bTE0MjU1MicnMikySFEJJDQxfVliQjI1MiRaRm1JYidtdVQ0X3VxcV9SUidCO1EJJHggX3JHeS8yNTIvOGVvO1FwUVF2NygyJFlGcTR1LXdtfTFfRlpafVR1bF8xRkk0MikySFEJJDQxfVliQjI1MiRaRm1JYidtdVQ0X3VxcV9kZCdCO1EJJHggX3JHeS8yNTIvOGVvO1FwUVF2NygyJFlGcTR1LXdtfTFfRlpafVR1bF8xdWMxMikySFEJJDQxfVliQjI1MiRaRm1JYidtdVQ0X3VxcV9kcydCO1EJJHggX3JHeS8yNTIvOGVvO1FwUVF2NygyJEp1SkR1cV92bGInajR1cV9JcX1qWSdCMncyaDJGbWwydm0xM0ZaKDIkTn1tN3ZJYic3Wn19bF8xdkp1J0IyKTJGbWwyISR4IF9yR3kvMikySFEJdjcoMjdafX1sdXEoMiRfLnQyKTI1NTIvOGVvMikySFEJCSQ0MX1ZYkIyNTIkWkZtSWInbXVUNF91cXFfXSdCMkMyIjIiMkMyJFpGbUliJ211VDRfdXFxX00nQjJDMiIySCROfW03dkliJzdafX1sXzF2SnUnQnAyIjJDMiRaRm1JYidtdVQ0X3VxcV9nJ0I7UQkJJHggX3JHeS8yNTIvOGVvO1EJcFFwUVF2NygyJE59bTd2SWInMXF1dV9OfUpKdW0xNCdCMilIUQlRCXY3KDJ2NDR1MSgkX3R7Ci9iJ1lGcXVtMSdCKTJHIFAydm0xM0ZaKCRfdHsKL2InWUZxdW0xJ0IpMncyUzIpMiRZRnF1bTEyNTJ2bTEzRlooMiRfdHsKL2InWUZxdW0xJ0IyKTsydVo0dTIkWUZxdW0xMjUyUztRCXY3KDJ2NDR1MSgkX3R7Ci9iJ3ZtbHVtMSdCKTJHIFAydm0xM0ZaKCRfdHsKL2Indm1sdW0xJ0IpMncyUzIpMiR2bWx1bTEyNTJ2bTEzRlooMiRfdHsKL2Indm1sdW0xJ0IyKTsydVo0dTIkdm1sdW0xMjUyUztRCVEJdjcyKDIkWUZxdW0xMikySFEJCVEJCSRxfVQyNTIkbEQtdzRqWXVxX1ZqdXE8KCIKb3lveC8ydmwySzh7bjIiMkMydDhvSy42MkMyIl9OfUpKdW0xNDJpcm84bzJ2bDI1MidIJFlGcXVtMXAnIik7UQkJUQkJdjcyKDIhdjQ0dTEoJHF9VGIndmwnQikyKTJIMiQ0MX1ZYkIyNTIkWkZtSWIncXVZWjxfdXFxfXFfaCdCOzIkeCBfckd5LzI1Mi84ZW87MnBRCQlRCXBRCVFwMnVaNHUySFEJUQkkWUZxdW0xMjUyUztRCSR2bWx1bTEyNTJTO1EJUXBRUSRxfVQyNTIkbEQtdzRqWXVxX1ZqdXE8KDIiCm95b3gvMnZsLDJsRjF1LDJGWlp9VF9OfUpKLDJGWVlxfTN1LDJGTk51NDQsMmo0dXFfdmwySzh7bjIiMkMydDhvSy42MkMyIl9ZfTQxMnlvSy8yPXsuIDIiMkMydDhvSy42MkMyIl9ZfTQxX3VjMXFGNDJ7IDIoIjJDMnQ4b0suNjJDMiJfWX00MUN2bDUiMkMydDhvSy42MkMyIl9ZfTQxX3VjMXFGNENtdVQ0X3ZsKTJpcm84bzJ2bDUnSCRZfTQxX3ZscCciMik7USR9WTF2fW00MjUybXVUNF9ZdXFKdjQ0dn1tKDIkcX1UYidGTk51NDQnQjIpO1EkbXVUNF9GajFXfXEyNTIkcX1UYidqNHVxX3ZsJ0I7UVFRdjcoMighMiRqNHVxX0lxfWpZYiRKdUpEdXFfdmxiJ2o0dXFfSXF9alknQkJiJ0ZaWn1UX0ZsbE4nQjJGbWwyJH1ZMXZ9bTRiJEp1SkR1cV92bGInajR1cV9JcX1qWSdCQjIhNTJoKTJ9cTIkfVkxdn1tNGIkSnVKRHVxX3ZsYidqNHVxX0lxfWpZJ0JCMjU1MlIyKTJsdnUoMiJyRk45dm1JMkYxMXVKWTEhIjIpO1FRdjcoMiEyJHF9VGIndmwnQjJ9cTIhMiRxfVRiJ0ZaWn1UX059SkonQjJ9cTIhMiRxfVRiJ0ZZWXF9M3UnQjIpMkhRCSQ0MX1ZYkIyNTIkWkZtSWInbXVUNF91cXFfaEUnQjtRCSR4IF9yR3kvMjUyLzhlbztRcFFRdjcyKDIkTn1tN3ZJYidKRmNfTn1KSnVtMTRfbEY8NCdCMikySFEJJHF9VGInbEYxdSdCMjUyNDFxMX0xdkp1KDIkcX1UYidsRjF1J0IyKTtRUQl2NzIoJHF9VGInbEYxdSdCMkEyKCRfLy5ubzItMigkTn1tN3ZJYidKRmNfTn1KSnVtMTRfbEY8NCdCMioyZGdTUzIqMmhdKSkyKTJIUQkJJDQxfVliQjI1MiRaRm1JYidtdVQ0X3VxcV9oRSdCO1EJCSR4IF9yR3kvMjUyLzhlbztRCXBRcFFRdjcoMnVKWTE8KDIkbUZKdTIpMkZtbDIkeCBfckd5LzIhNTIvOGVvMikySFEJJDQxfVliQjI1MiRaRm1JYidtdVQ0X3VxcV9FJ0I7UQkkeCBfckd5LzI1Mi84ZW87UXBRUXY3KDIkSkZ2WjIhNTIiIjIpMkhRCXY3KDJATn1qbTEodWNZWn1sdSgiQCIsMiRKRnZaKSkyITUyaDIpMkhRCQkkNDF9WWJCMjUyJFpGbUliJ211VDRfdXFxX1JTJ0I7UQkJJHggX3JHeS8yNTIvOGVvO1EJcFFRUXBRUXY3KDIhJHY0X1p9SUl1bDJGbWwyJHggX3JHeS8yITUyLzhlbzIpMkhRCSRsRC13Vmp1cTwoMiIKb3lveC8ybUZKdTI3cX1KMiIyQzJlCm84dDhvSy42MkMyIl9qNHVxNDJpcm84bzJtRkp1MjUyJyIyQzIkbUZKdTJDMiInIjIpO1EJUQl2NygyJGxELXdtakpfcX1UNCgpMncyUzIpMkhRCQkkbUZKdTI1MiRaRm1JYidOX219MV9xdUknQkMiMiJDJG1GSnU7UQkJUQkJJGxELXdWanVxPCgyIgpveW94LzJtRkp1MjdxfUoyIjJDMmUKbzh0OG9LLjYyQzIiX2o0dXE0MmlybzhvMm1GSnUyNTInIjJDMiRtRkp1MkMyIiciMik7UQkJUQkJdjcoMiRsRC13bWpKX3F9VDQoKTJ3MlMyKTJIUQkJCSQ0MX1ZYkIyNTIkWkZtSWInbXVUNF91cXFfcydCO1EJCQkkeCBfckd5LzI1Mi84ZW87UQkJcFEJcFEJJGxELXc3cXV1KCk7UXBRUSQxdkp1MjUybEYxdSgyImEtSi1sMnI6djo0IiwyJF8vLm5vMik7USRUV3VxdV9GWVlxfTN1MjUyUjtRUSRfCm8KCi57IGInNHVOX059bHVfNHU0NHZ9bSdCMjUyUztRJF8KbwoKLnsgYidWanU0MXZ9bSdCMjUyN0ZaNHU7UVF2NygyJHggX3JHeS8yKTJIUQlRCUo0SUR9YygyJFpGbUliJ0ZaWl91cXFfUidCLDJ2SllafWx1KDIiQURxMjB3IiwyJDQxfVkyKTJDMiJBRHEyMHdBRHEyMHdBRjJXcXU3NVwiW0YzRjROcXZZMTpXdjQxfXE8Q0l9KC1SKVwidyIyQzIkWkZtSWInRlpaX1lxdTMnQjJDMiJBMEZ3IjIpO1FRcDJ1WjR1MkhRCVEJJGpZbEYxdV9OfUpKdW0xNDI1MjdGWjR1O1FRCXY3MigyJE59bTd2SWInRlpafVRfTn1KRHZtdSdCMikySFEJUQkJJHF9VDI1MiRsRC13NGpZdXFfVmp1cTwoMiIKb3lveC8ydmwsMll9NDFfdmwsMmo0dXFfdmwsMmxGMXUsMjF1YzEsMnZZLDJ2NF9xdUl2NDF1cSwyRllZcX0zdSwyWUZxdW0xMks4e24yIjJDMnQ4b0suNjJDMiJfTn1KSnVtMTQyaXJvOG8yWX00MV92bDI1MidIJFl9NDFfdmxwJzJ7OFBvODJMYTJ2bDJQbwp4Mnkubi4vMlMsUiIyKTtRCQlRCQl2NygyJHF9VGIndmwnQjIpMkhRCQkJUQkJCXY3KDIkcX1UYidqNHVxX3ZsJ0IyNTUyJEp1SkR1cV92bGInajR1cV92bCdCMkcgUDIkcX1UYid2NF9xdUl2NDF1cSdCMkcgUDIkcX1UYidZRnF1bTEnQjI1NTIkWUZxdW0xMikyJGpZbEYxdV9OfUpKdW0xNDI1MjFxanU7UQkJCXVaNHV2NygyJHF9VGIndlknQjI1NTIkXy50MkcgUDIhMiRxfVRiJ3Y0X3F1SXY0MXVxJ0IyRyBQMiEyJHY0X1p9SUl1bDJHIFAyJHF9VGInWUZxdW0xJ0IyNTUyJFlGcXVtMSkyJGpZbEYxdV9OfUpKdW0xNDI1MjFxanU7UVEJCQkkcX1UYidsRjF1J0IyNTI0MXExfTF2SnUoMiRxfVRiJ2xGMXUnQjIpO1EJCQlRCQkJdjcoMmxGMXUoMiJhLUotbCIsMiRxfVRiJ2xGMXUnQjIpMiE1MmxGMXUoMiJhLUotbCIsMiRfLy5ubzIpMikyJGpZbEYxdV9OfUpKdW0xNDI1MjdGWjR1O1FRCQkJdjcyKDIkajR1cV9JcX1qWWIkSnVKRHVxX3ZsYidqNHVxX0lxfWpZJ0JCYid1bHYxX1p2SnYxJ0IyRyBQMigoJHF9VGInbEYxdSdCMisyKCRqNHVxX0lxfWpZYiRKdUpEdXFfdmxiJ2o0dXFfSXF9alknQkJiJ3VsdjFfWnZKdjEnQjIqMmdTKSkyQTIkXy8ubm8yKTIpMiRqWWxGMXVfTn1KSnVtMTQyNTI3Rlo0dTtRCQkJUQkJCXY3KDIoKGxadV80MXFadW0oMiRxfVRiJzF1YzEnQiwyJE59bTd2SWInTldGcTR1MSdCMikyKzJsWnVfNDFxWnVtKDIkTn1KSnVtMTQsMiROfW03dkliJ05XRnE0dTEnQjIpKTJ3MiROfW03dkliJ059Skp1bTE0X0pGY1p1bSdCKTJGbWwyJGpZbEYxdV9OfUpKdW0xNDIpMkhRCQkJCSRqWWxGMXVfTn1KSnVtMTQyNTI3Rlo0dTtRCQkJCSQ0MX1ZYkIyNTIkWkZtSWInbXVUNF91cXFfZCdCO1EJCQkJJHggX3JHeS8yNTIvOGVvO1EJCQkJSjRJRH1jKDIkWkZtSWInRlpaX3VxcV9SJ0IsMnZKWVp9bHUoMiJBRHEyMHciLDIkNDF9WTIpMkMyIkFEcTIwd0FEcTIwd0FGMldxdTc1XCJbRjNGNE5xdlkxOld2NDF9cTxDSX0oLVIpXCJ3IjJDMiRaRm1JYidGWlpfWXF1MydCMkMyIkEwRnciMik7UQkJCVEJCQlwUQkJUQkJcFFRCXBRCVEJdjcoMiEyJHggX3JHeS8yKTJIUQkJUQkJdjcoMiROfW03dkliJ0ZaWn1UX05KfWwnQjJGbWwyJGo0dXFfSXF9alliJEp1SkR1cV92bGInajR1cV9JcX1qWSdCQmInRlpafVRfSn1sTidCMikySFEJCQlRCQkJdjcoMiRqWWxGMXVfTn1KSnVtMTQyKTJIUQkJCQl2NygyJHF9VGInRllZcX0zdSdCMikyJGpZbEYxdV9OfUpKdW0xNDI1MjdGWjR1O1EJCQlwUQkJCVEJCQkkVFd1cXVfRllZcX0zdTI1MlM7UQkJCSQ0MX1ZYkIyNTIkWkZtSWInbXVUNF91cXFfZFInQjtRCQkJJHggX3JHeS8yNTIvOGVvO1EJCQlKNElEfWMoMiRaRm1JYidGWlpfdm03fSdCLDJ2SllafWx1KDIiQURxdyIsMiQ0MX1ZMikyQzIiQURxd0FEcXdBRjJXcXU3NVwiW0YzRjROcXZZMTpXdjQxfXE8Q0l9KC1SKVwidyIyQzIkWkZtSWInRlpaX1lxdTMnQjJDMiJBMEZ3IjIpO1EJCVEJCXBRCQlRCQl2NygyJGpZbEYxdV9OfUpKdW0xNDIpMkhRCQkJUQkJCXY3KDIodm0xKSROfW03dkliJ0ZaWn1UX059Skp1bTE0X1Q8NHZUPEknQjJBMlIpMiROX3ZKWVp9bHUyNTIiQURxd0FEcXciO1EJCQl1WjR1MiROX3ZKWVp9bHUyNTIiIjtRCQkJUQkJCSROfUpKdW0xNDI1MiRsRC13NEY3dTRWWigyJHF9VGInMXVjMSdCMikyQzIkTl92SllafWx1MkMyJGxELXc0Rjd1NFZaKDIkTn1KSnVtMTQyKTtRCQkJJGxELXdWanVxPCgyImV0UEcvbzIiMkMydDhvSy42MkMyIl9OfUpKdW0xNDI0dTEybEYxdTUnJDF2SnUnLDIxdWMxNSdIJE59Skp1bTE0cCcsMkZZWXF9M3U1J0gkVFd1cXVfRllZcX0zdXAnMmlybzhvMnZsNSdIJHF9VGIndmwnQnAnIjIpO1EJCQkkRmxsdWxfTn1KSnVtMTRfdmwyNTIkcX1UYid2bCdCO1EJCQlRCQkJdjcyKCRqNHVxX0lxfWpZYiRKdUpEdXFfdmxiJ2o0dXFfSXF9alknQkJiJ0ZaWn1UX2pZX3ZKRkl1J0IpMkhRCQkJCSRsRC13Vmp1cTwoImV0UEcvbzIiMkMydDhvSy42MkMyIl9OfUpKdW0xNF83dlp1NDIKby8yTl92bDUnSCRGbGx1bF9OfUpKdW0xNF92bHAnMmlybzhvMk5fdmwyNTInUycyRyBQMkZqMVd9cTI1MidIJEp1SkR1cV92bGInbUZKdSdCcCciKTtRCQkJcFFRCQlwMnVaNHUySFFRCQkJJE59Skp1bTE0MjUJJGxELXc0Rjd1NFZaKDIkTn1KSnVtMTQyKTsJCVFRCQkJdjcoMiR2NF9afUlJdWwyKTIkbEQtd1ZqdXE8KDIiLiAKbzgvMi4gL3syIjJDMnQ4b0suNjJDMiJfTn1KSnVtMTQyKFl9NDFfdmwsMmo0dXFfdmwsMmxGMXUsMkZqMX1xLDJ1SkZ2WiwyMXVjMSwydlksMnY0X3F1SXY0MXVxLDJGWVlxfTN1LDJZRnF1bTEpMjNGWmp1NDIoJ0gkWX00MV92bHAnLDInSCRKdUpEdXFfdmxiJ2o0dXFfdmwnQnAnLDInSCQxdkp1cCcsMidIJG1GSnVwJywyJ0gkSkZ2WnAnLDInSCROfUpKdW0xNHAnLDInSCRfLnRwJywyJ1InLDInSCRUV3VxdV9GWVlxfTN1cCcsMidIJFlGcXVtMXAnKSIyKTtRCQkJdVo0dTIkbEQtd1ZqdXE8KDIiLiAKbzgvMi4gL3syIjJDMnQ4b0suNjJDMiJfTn1KSnVtMTQyKFl9NDFfdmwsMmxGMXUsMkZqMX1xLDJ1SkZ2WiwyMXVjMSwydlksMnY0X3F1SXY0MXVxLDJGWVlxfTN1LDJZRnF1bTEpMjNGWmp1NDIoJ0gkWX00MV92bHAnLDInSCQxdkp1cCcsMidIJG1GSnVwJywyJ0gkSkZ2WnAnLDInSCROfUpKdW0xNHAnLDInSCRfLnRwJywyJ1MnLDInSCRUV3VxdV9GWVlxfTN1cCcsMidIJFlGcXVtMXAnKSIyKTtRUQkJCSRGbGx1bF9OfUpKdW0xNF92bDI1MiRsRC13dm00dXExX3ZsKCk7CQkJUVEJCQl2NygyJFRXdXF1X0ZZWXF9M3UyKTIkbEQtd1ZqdXE8KDIiZXRQRy9vMiIyQzJ0OG9LLjYyQzIiX1l9NDEyCm8vMk59SkpfbWpKNU59SkpfbWpKK1IyaXJvOG8ydmw1J0gkWX00MV92bHAnIjIpO1EJCQlRCQkJdjcoMiR2NF9afUlJdWwyKTJIUQkJCQkkbEQtd1ZqdXE8KDIiZXRQRy9vMiIyQzJlCm84dDhvSy42MkMyIl9qNHVxNDIKby8yTn1KSl9tako1Tn1KSl9takorUjJpcm84bzJqNHVxX3ZsMjUnSCRKdUpEdXFfdmxiJ2o0dXFfdmwnQnAnIjIpO1EJCQlwUQkJcFEJCVEJCXY3MigyJGo0dXFfSXF9alliJEp1SkR1cV92bGInajR1cV9JcX1qWSdCQmInRlpafVRfallfdkpGSXUnQjIpSFEJCQkkbEQtd1ZqdXE8KDIiZXRQRy9vMiIyQzJ0OG9LLjYyQzIiX059Skp1bTE0Xzd2WnU0MgpvLzJOX3ZsNSdIJEZsbHVsX059Skp1bTE0X3ZscCcyaXJvOG8yTl92bDI1MidTJzJHIFAyRmoxV31xMjUyJ0gkSnVKRHVxX3ZsYidtRkp1J0JwJyIyKTtRCQlwUQkJUQkJdjcoMiROfW03dkliJzdafX1sXzF2SnUnQjIpMkhRCQkJJGxELXdWanVxPCgyIi4gCm84LzIuIC97MiIyQzJ0OG9LLjYyQzIiXzdafX1sMih2bCwydlkpMjNGWmp1NDIoJyRfLy5ubycsMickXy50JykiMik7UQkJcFFRCQl2NygyJGo0dXFfSXF9alliJEp1SkR1cV92bGInajR1cV9JcX1qWSdCQmInSkZjX059Skp1bTFfbEY8J0IyKTJICQlRCQkJJGxELXdWanVxPCgyIi4gCm84LzIuIC97MiIyQzJ0OG9LLjYyQzIiXzR1bWxafUkyKGo0dXEsMmxGMXUsMjdaRkkpMjNGWmp1NDIoJ0gkTld1TjlfajR1cXAnLDInSCRfLy5ub3AnLDInZCcpIjIpO1EJCXBRUQkJdjcyKDIkTn1tN3ZJYidKRnZaX059Skp1bTE0J0IyezgyJE59bTd2SWInRlpafVRfNGpENE5xdkR1J0IyKTJIUVEJCQkkcX1UMjUyJGxELXc0all1cV9WanVxPCgyIgpveW94LzJ2bCwyNFd9cTFfNDF9cTwsMjF2MVp1LDJsRjF1LDJGWjFfbUZKdSwyTkYxdUl9cTwySzh7bjIiQ3Q4b0suNkMiX1l9NDEyaXJvOG8ydmwyNTInSCRZfTQxX3ZscCciMik7UVEJCQkkcX1UYidsRjF1J0IyNTI0MXExfTF2SnUoMiRxfVRiJ2xGMXUnQjIpO1EJCQkkcX1UYidORjF1SX1xPCdCMjUydm0xM0ZaKDIkcX1UYidORjF1SX1xPCdCMik7UVEJCQl2NygyJE59bTd2SWInRlpafVRfRloxX2pxWidCMikySFEJCQkJUQkJCQl2NygyJE59bTd2SWInNHV9XzE8WXUnQjI1NTJSMns4MiROfW03dkliJzR1fV8xPFl1J0IyNTUyaDIpMkhRCQkJCQlRCQkJCQl2NygyJHF9VGInTkYxdUl9cTwnQjJGbWwyJE59bTd2SWInNHV9XzE8WXUnQjI1NTJoMikySFEJCQkJCQlRCQkJCQkJJDdqWlpfWnZtOTI1MiROfW03dkliJ1cxMVlfV31KdV9qcVonQjJDMkl1MV9qcVooMiRxfVRiJ05GMXVJfXE8J0IyKTJDMiIwIjJDMiRxfVRiJ3ZsJ0IyQzIiLSIyQzIkcX1UYidGWjFfbUZKdSdCMkMyIkNXMUpaIjtRCQkJCQlRCQkJCQlwMnVaNHUySFEJCQkJCQlRCQkJCQkJJDdqWlpfWnZtOTI1MiROfW03dkliJ1cxMVlfV31KdV9qcVonQjJDMiRxfVRiJ3ZsJ0IyQzIiLSIyQzIkcX1UYidGWjFfbUZKdSdCMkMyIkNXMUpaIjtRCQkJCQlRCQkJCQlwUQkJCQlRCQkJCXAydVo0dTJIUQkJCQkJUQkJCQkJJDdqWlpfWnZtOTI1MiROfW03dkliJ1cxMVlfV31KdV9qcVonQjJDMmxGMXUoMidhMEowbDAnLDIkcX1UYidsRjF1J0IyKTJDMiRxfVRiJ0ZaMV9tRkp1J0IyQzIiQ1cxSloiO1EJCQkJcFEJCQlRCQkJcDJ1WjR1MkhRCQkJCVEJCQkJJDdqWlpfWnZtOTI1MiROfW03dkliJ1cxMVlfV31KdV9qcVonQjJDMiJ2bWx1Y0NZV1k/bXVUNHZsNSIyQzIkcX1UYid2bCdCO1EJCQlRCQkJcFEJUQkJCSQxdjFadTI1MjQxcXZZNFpGNFd1NCgkcX1UYicxdjFadSdCKTtRCQkJUQkJCSRxfVQyNTIkbEQtdzRqWXVxX1ZqdXE8KDIiCm95b3gvMioySzh7bjIiMkMydDhvSy42MkMyIl91SkZ2WjJpcm84bzJtRkp1NSdOfUpKdW0xNCcyeS5uLi8yUyxSIjIpO1EJCQkkSkZ2WjI1Mm11VDJsWnVfSkZ2WigyJE59bTd2SSwyJHF9VGInajR1X1cxSlonQjIpO1FRCQkJdjcyKDQxcVl9NCgkN2paWl9adm05LDIiMDAiKTI1NTUyUykyJDdqWlpfWnZtOTI1MiJXMTFZOiJDJDdqWlpfWnZtOTtRCQkJdVo0dXY3Mig0MXFZfTQoJDdqWlpfWnZtOSwyIjAiKTI1NTUyUykyJDdqWlpfWnZtOTI1MiJXMTFZOjAwIkMkXwpvOGZvOGInci8vdF9yewovJ0JDJDdqWlpfWnZtOTtRUQkJCSRxfVRiJzF1SllaRjF1J0IyNTI0MXF2WTRaRjRXdTQoMiRxfVRiJzF1SllaRjF1J0IyKTtRCQkJJHF9VGInMXVKWVpGMXUnQjI1MjQxcV9xdVlaRk51KDIiSCVqNHVxbUZKdSVwIiwyJG1GSnUsMiRxfVRiJzF1SllaRjF1J0IyKTtRCQkJJHF9VGInMXVKWVpGMXUnQjI1MjQxcV9xdVlaRk51KDIiSCVsRjF1JXAiLDJaRm1JbEYxdSgyIlsySzJhMnI6diIsMiRfLy5ubywyMXFqdTIpLDIkcX1UYicxdUpZWkYxdSdCMik7UQkJCSRxfVRiJzF1SllaRjF1J0IyNTI0MXFfcXVZWkZOdSgyIkglWnZtOSVwIiwyJDdqWlpfWnZtOSwyJHF9VGInMXVKWVpGMXUnQjIpO1EJCQkkcX1UYicxdUpZWkYxdSdCMjUyNDFxX3F1WVpGTnUoMiJIJTF2MVp1JXAiLDIkMXYxWnUsMiRxfVRiJzF1SllaRjF1J0IyKTtRUQkJCSREfWw8MjUyNDFxX3F1WVpGTnUoMidcbScsMiIiLDIkTn1KSnVtMTQyKTtRCQkJJER9bDwyNTI0MXFfcXVZWkZOdSgyJ1xxJywyIiIsMiREfWw8Mik7UQkJCVEJCQkkRH1sPDI1MjQxcXZZNFpGNFd1NCgyNDFxdlk0WkY0V3U0KDIkRH1sPDIpMik7UQkJCSREfWw8MjUyNDFxX3F1WVpGTnUoMiJBRHEyMHciLDIiXG0iLDIkRH1sPDIpO1EJCQkkRH1sPDI1MjQxcV9xdVlaRk51KDIiQURxdyIsMiJcbSIsMiREfWw8Mik7UQkJCSREfWw8MjUyNDFxdllfMUZJNCgyJER9bDwyKTtRCQkJJER9bDwyNTJZcXVJX3F1WVpGTnUyKDIiI1xiV3ZsdShDKj8pXEIoQys/KVxiMFd2bHVcQiN2NCIsMiIiLDIkRH1sPDIpO1EJCQlRCQkJdjcoMiRxfVRiJ2o0dV9XMUpaJ0IyKTJIUQkJCQkkRH1sPDI1MjQxcV9xdVlaRk51KCJcbSIsMiJBRHF3IiwyJER9bDwyKTtRCQkJcFEJCQkJCVEJCQkkcX1UYicxdUpZWkYxdSdCMjUyNDFxX3F1WVpGTnUoMiJIJTF1YzElcCIsMiREfWw8LDIkcX1UYicxdUpZWkYxdSdCMik7UVEJCXBRUQkJdjcoMiROfW03dkliJ0pGdlpfTn1KSnVtMTQnQjIpMkhRCQkJUQkJCSREfWw8MjUyNDFxX3F1WVpGTnUoMiJIJXZZJXAiLDIkXy50LDIkcX1UYicxdUpZWkYxdSdCMik7UQkJCSREfWw8MjUyNDFxX3F1WVpGTnUoMiJIJWo0dXFtRkp1XzF9JXAiLDIkWkZtSWInRmxKdm0nQiwyJER9bDwyKTtRCQkJJER9bDwyNTI0MXFfcXVZWkZOdSgyIkglam00akQ0TnF2RHUlcCIsMiItLSIsMiREfWw8Mik7CQkJUQkJCSRKRnZaLXc0dW1sKDIkTn1tN3ZJYidGbEp2bV9KRnZaJ0IsMiRaRm1JYidKRnZaX059Skp1bTE0J0IsMiREfWw8Mik7UQkJUQkJcFFRUQkJdjcyKDIkTn1tN3ZJYidGWlp9VF80akQ0TnF2RHUnQjJHIFAyJFRXdXF1X0ZZWXF9M3UyKTJIUVEJCQkkcX1UYicxdUpZWkYxdSdCMjUyNDFxX3F1WVpGTnUoMiJIJXZZJXAiLDIiLS0iLDIkcX1UYicxdUpZWkYxdSdCMik7UQkJCVEJCQkkN31qbWxfbXVUNF9GajFXfXFfNGpENE5xdkR1MjUyN0ZaNHU7UQkJCSQ3fWptbF9xdVlaPF9GajFXfXFfNGpENE5xdkR1MjUyN0ZaNHU7UQkJCVEJCQkkbXVUNF9GajFXfXFfNGpENE5xdkR1MjUyJGxELXc0all1cV9WanVxPCgyIgpveW94LzIiMkMyZQpvOHQ4b0suNjJDMiJfajR1cTRDajR1cV92bCwyIjJDMmUKbzh0OG9LLjYyQzIiX2o0dXE0Q21GSnUsMiIyQzJlCm84dDhvSy42MkMyIl9qNHVxNEN1SkZ2WiwyIjJDMmUKbzh0OG9LLjYyQzIiX2o0dXE0Q211VDRfNGpENE5xdkR1Mks4e24yIjJDMnQ4b0suNjJDMiJfWX00MV91YzFxRjQyeW9LLzI9ey4gMiIyQzJlCm84dDhvSy42MkMyIl9qNHVxNDJ7IDIiMkMydDhvSy42MkMyIl9ZfTQxX3VjMXFGNENqNHVxX3ZsNSIyQzJlCm84dDhvSy42MkMyIl9qNHVxNENqNHVxX3ZsMmlybzhvMiIyQzJ0OG9LLjYyQzIiX1l9NDFfdWMxcUY0Q211VDRfdmw1J0gkWX00MV92bHAnIjIpO1EJCQlRCQkJdjcoMiRZRnF1bTEyKTJIUQkJCQlRCQkJCSRxdVlaPF9GajFXfXFfNGpENE5xdkR1MjUyJGxELXc0all1cV9WanVxPCgyIgpveW94LzIiMkMyZQpvOHQ4b0suNjJDMiJfajR1cTRDajR1cV92bCwyIjJDMmUKbzh0OG9LLjYyQzIiX2o0dXE0Q21GSnUsMiIyQzJlCm84dDhvSy42MkMyIl9qNHVxNEN1SkZ2WiwyIjJDMmUKbzh0OG9LLjYyQzIiX2o0dXE0Q059Skp1bTE0X3F1WVo8XzRqRDROcXZEdTJLOHtuMiIyQzJ0OG9LLjYyQzIiX059Skp1bTE0MnlvSy8yPXsuIDIiMkMyZQpvOHQ4b0suNjJDMiJfajR1cTQyeyAyIjJDMnQ4b0suNjJDMiJfTn1KSnVtMTRDajR1cV92bDUiMkMyZQpvOHQ4b0suNjJDMiJfajR1cTRDajR1cV92bDJpcm84bzIiMkMydDhvSy42MkMyIl9OfUpKdW0xNEN2bDUnSCRZRnF1bTFwJyIyKTtRCQkJCVEJCQlwMnVaNHUyJHF1WVo8X0ZqMVd9cV80akQ0TnF2RHUyNTJGcXFGPCgpO1FRCQkJdjcyKDQxcVl9NCgkTn1tN3ZJYidXMTFZX1d9SnVfanFaJ0IsMiIwMCIpMjU1NTJTKTIkNFp2bTkyNTIiVzExWTQ6IkMkTn1tN3ZJYidXMTFZX1d9SnVfanFaJ0I7UQkJCXVaNHV2NzIoNDFxWX00KCROfW03dkliJ1cxMVlfV31KdV9qcVonQiwyIjAiKTI1NTUyUykyJDRadm05MjUyIlcxMVk0OjAwIkMkXwpvOGZvOGInci8vdF9yewovJ0JDJE59bTd2SWInVzExWV9XfUp1X2pxWidCO1EJCQl1WjR1MiQ0WnZtOTI1MiROfW03dkliJ1cxMVlfV31KdV9qcVonQjtRCQlRCQkJdjcoMiEkWUZxdW0xMikySFEJCQkJUQkJCQkkbEQtd1ZqdXE8KDIiCm95b3gvMmo0dXFfdmwsMm1GSnUsMnVKRnZaLDJXRjRXMks4e24yIjJDMnQ4b0suNjJDMiJfNGpENE5xdkR1MmlybzhvMm11VDRfdmw1J0gkWX00MV92bHAnIjIpO1EJCQkJUQkJCQlUV3ZadSgyJHF1TjI1MiRsRC13SXUxX3F9VCgpMilRCQkJCUhRCQkJCQl2NygyJHF1TmInajR1cV92bCdCMjU1MiRtdVQ0X0ZqMVd9cV80akQ0TnF2RHViJ2o0dXFfdmwnQjIpMkhRCQkJCQkJJDd9am1sX211VDRfRmoxV31xXzRqRDROcXZEdTI1MjFxanU7UQkJCQkJcFEJCQkJCQlRCQkJCQl2NygyJFlGcXVtMTJHIFAyJHF1TmInajR1cV92bCdCMjU1MiRxdVlaPF9GajFXfXFfNGpENE5xdkR1YidqNHVxX3ZsJ0IyKTJIUQkJCQkJCSQ3fWptbF9xdVlaPF9GajFXfXFfNGpENE5xdkR1MjUyMXFqdTtRCQkJCQlwUQkJCQkJUQkJCQkJdjcyKCRxdU5iJ2o0dXFfdmwnQjIhNTIkSnVKRHVxX3ZsYidqNHVxX3ZsJ0IyKTJIUQkJCQkJCVEJCQkJCQkkRH1sPDI1MjQxcV9xdVlaRk51KDIiSCVqNHVxbUZKdV8xfSVwIiwyJHF1TmInbUZKdSdCLDIkcX1UYicxdUpZWkYxdSdCMik7UQkJCQkJCSREfWw8MjUyNDFxX3F1WVpGTnUoMiJIJWptNGpENE5xdkR1JXAiLDIkNFp2bTkyQzIidm1sdWNDWVdZP2x9NWptNGpENE5xdkR1Jll9NDFfdmw1IjJDMiRZfTQxX3ZsMkMyIiZqNHVxX3ZsNSIyQzIkcXVOYidqNHVxX3ZsJ0IyQzIiJldGNFc1IjJDMiRxdU5iJ1dGNFcnQiwyJER9bDwyKTtRCQkJCQkJJEpGdlotdzR1bWwoMiRxdU5iJ3VKRnZaJ0IsMiRaRm1JYidKRnZaX059Skp1bTE0J0IsMiREfWw8Mik7UQlRCQkJCQlwUQlRCQkJCXBRCQkJCVEJCQlwUVEJCQl2NygkbXVUNF9GajFXfXFfNGpENE5xdkR1YidtdVQ0XzRqRDROcXZEdSdCMkcgUDIhJDd9am1sX211VDRfRmoxV31xXzRqRDROcXZEdTJHIFAyJG11VDRfRmoxV31xXzRqRDROcXZEdWInajR1cV92bCdCMiE1MiRKdUpEdXFfdmxiJ2o0dXFfdmwnQikySFEJCQkJUQkJCQkkRH1sPDI1MjQxcV9xdVlaRk51KDIiSCVqNHVxbUZKdV8xfSVwIiwyJG11VDRfRmoxV31xXzRqRDROcXZEdWInbUZKdSdCLDIkcX1UYicxdUpZWkYxdSdCMik7UQkJCQlRCQkJCXY3MigkTn1tN3ZJYidGWlp9VF9GWjFfanFaJ0IpMkhRCQkJCQkkRH1sPDI1MjQxcV9xdVlaRk51KDIiSCVqbTRqRDROcXZEdSVwIiwyJDRadm05MkMyImo0dXEwIjJDMmpxWnVtTn1sdTIoMiRtdVQ0X0ZqMVd9cV80akQ0TnF2RHViJ21GSnUnQjIpMkMyIjAiLDIkRH1sPDIpO1EJCQkJcDJ1WjR1MkhRCQkJCQkkRH1sPDI1MjQxcV9xdVlaRk51KDIiSCVqbTRqRDROcXZEdSVwIiwyJDRadm05MkMyInZtbHVjQ1lXWT80akRGTjF2fW01ajR1cXZtN30majR1cTUiMkMyanFadW1OfWx1MigyJG11VDRfRmoxV31xXzRqRDROcXZEdWInbUZKdSdCMiksMiREfWw8Mik7UQkJCQlwUQkJCQlRCQkJCSRKRnZaLXc0dW1sKDIkbXVUNF9GajFXfXFfNGpENE5xdkR1Yid1SkZ2WidCLDIkWkZtSWInSkZ2Wl9OfUpKdW0xNCdCLDIkRH1sPDIpO1EJCQkJUQkJCQkkWkY0MV80dW1sMjUyJG11VDRfRmoxV31xXzRqRDROcXZEdWInajR1cV92bCdCO1EJCQkJUQkJCXAydVo0dTIkWkY0MV80dW1sMjUyN0ZaNHU7UQkJCVEJCQl2NygkWUZxdW0xMkcgUDIkcXVZWjxfRmoxV31xXzRqRDROcXZEdWInTn1KSnVtMTRfcXVZWjxfNGpENE5xdkR1J0IyRyBQMiEkN31qbWxfcXVZWjxfRmoxV31xXzRqRDROcXZEdTJHIFAyJHF1WVo8X0ZqMVd9cV80akQ0TnF2RHViJ2o0dXFfdmwnQjIhNTIkWkY0MV80dW1sMkcgUDIkcXVZWjxfRmoxV31xXzRqRDROcXZEdWInajR1cV92bCdCMiE1MiRKdUpEdXFfdmxiJ2o0dXFfdmwnQjIpMkhRCQkJCVEJCQkJJER9bDwyNTI0MXFfcXVZWkZOdSgyIkglajR1cW1GSnVfMX0lcCIsMiRxdVlaPF9GajFXfXFfNGpENE5xdkR1YidtRkp1J0IsMiRxfVRiJzF1SllaRjF1J0IyKTtRCQkJCVEJCQkJdjcyKCROfW03dkliJ0ZaWn1UX0ZaMV9qcVonQikySFEJCQkJCSREfWw8MjUyNDFxX3F1WVpGTnUoMiJIJWptNGpENE5xdkR1JXAiLDIkNFp2bTkyQzIiajR1cTAiMkMyanFadW1OfWx1MigyJHF1WVo8X0ZqMVd9cV80akQ0TnF2RHViJ21GSnUnQjIpMkMyIjAiLDIkRH1sPDIpO1EJCQkJcDJ1WjR1MkhRCQkJCQkkRH1sPDI1MjQxcV9xdVlaRk51KDIiSCVqbTRqRDROcXZEdSVwIiwyJDRadm05MkMyInZtbHVjQ1lXWT80akRGTjF2fW01ajR1cXZtN30majR1cTUiMkMyanFadW1OfWx1MigyJHF1WVo8X0ZqMVd9cV80akQ0TnF2RHViJ21GSnUnQjIpLDIkRH1sPDIpO1EJCQkJcFEJCQkJUQkJCQkkSkZ2Wi13NHVtbCgyJHF1WVo8X0ZqMVd9cV80akQ0TnF2RHViJ3VKRnZaJ0IsMiRaRm1JYidKRnZaX059Skp1bTE0J0IsMiREfWw8Mik7UQkJCXBRCQkJUQkJCSRsRC13N3F1dSgpO1FRCQlwUQkJUQkJdjcyKCROfW03dkliJ0ZaWn1UXzRqRDROcXZEdSdCMkcgUDIkdjRfWn1JSXVsMkcgUDIkX3R7Ci9iJ0ZaWn1UXzRqRDROcXZEdSdCMkcgUDIkajR1cV9JcX1qWWIkSnVKRHVxX3ZsYidqNHVxX0lxfWpZJ0JCYidGWlp9VF80akQ0TnF2RHUnQikySFFRCQkJJDd9am1sXzRqRDROcXZEdTI1MiRsRC13NGpZdXFfVmp1cTwoMiIKb3lveC8yeHtlIC8oKikyRjQyTn1qbTEySzh7bjIiMkMydDhvSy42MkMyIl80akQ0TnF2RHUyaXJvOG8ybXVUNF92bDUnSCRZfTQxX3ZscCcyRyBQMmo0dXFfdmw1J0gkSnVKRHVxX3ZsYidqNHVxX3ZsJ0JwJyIyKTtRCQkJUQkJCXY3KDIhJDd9am1sXzRqRDROcXZEdWInTn1qbTEnQjIpMkhRCVEJCQkJJDRfV0Y0VzI1MkpsTSgycUZtbH1KX0Q8MXU0KGRoKTIpO1EJUQkJCQkkbEQtd1ZqdXE8KDIiLiAKbzgvMi4gL3syIjJDMnQ4b0suNjJDMiJfNGpENE5xdkR1MihqNHVxX3ZsLDJtRkp1LDJ1SkZ2WiwybXVUNF92bCwyV0Y0VykyM0ZaanU0MignSCRKdUpEdXFfdmxiJ2o0dXFfdmwnQnAnLDInSCRKdUpEdXFfdmxiJ21GSnUnQnAnLDInSCRKdUpEdXFfdmxiJ3VKRnZaJ0JwJywyJ0gkWX00MV92bHAnLDInSCQ0X1dGNFdwJykiMik7UQlRCQkJcFFRCQlwUQkJCVEJCXY3MigyJE59bTd2SWInRlpafVRfRloxX2pxWidCMkcgUDIhJE59bTd2SWInNHV9XzE8WXUnQjIpMiROWXF1N3ZjMjUyIjdqWlpfIjsydVo0dTIkTllxdTd2YzI1MiI3alpaXyJDJFl9NDFfdmw7UVEJCU5adUZxX05GTld1KDJGcXFGPCgyJ211VDRfJywyJ059SkpfJ0MkWX00MV92bCwyJE5ZcXU3dmMsMic0MUYxNCcyKTIpO1EJCVEJCXY3KDIhJEZbRmNfRmxsNDJHIFAyISR4IF9yR3kvMikySFEJCQkkXwpvOGZvOGInOG96ZW8KL19lOC4nQjI1MlcxSlo0WXVOdkZaTldGcTQoJF8KbzhmbzhiJzhvemVvCi9fZTguJ0IsMm8gL196ZXsvbwosMiROfW03dkliJ05XRnE0dTEnQjIpO1EJCQlXdUZsdXEoMiJ5fU5GMXZ9bToySCRfCm84Zm84Yic4b3plbwovX2U4LidCcCIyKTtRCQkJbHZ1KCk7UQkJcFEJUQlwMnVaNHUySjRJRH1jKDIkWkZtSWInRlpaX3VxcV9SJ0IsMnZKWVp9bHUoMiJBRHEyMHciLDIkNDF9WTIpMkMyIkFEcTIwd0FEcTIwd0FGMldxdTc1XCJbRjNGNE5xdlkxOld2NDF9cTxDSX0oLVIpXCJ3IjJDMiRaRm1JYidGWlpfWXF1MydCMkMyIkEwRnciMik7UVFwUT93';$_D=strrev('edoced_46esab');eval($_D('JF9YPWJhc2U2NF9kZWNvZGUoJF9YKTskX1g9c3RydHIoJF9YLCc5L0YwPlBtTDU4b099bE42NHMzek1XVGFyWWRnakUgLlVLY0h5cFJmQ0c8dgp1SnhJd3tEZWJdQVprMlMxW3RxaT1CaFFWN25YJywna1RhLzhEbkI9UkVHb2RjWHM3dlE1aHdZSHAzNnU5TklLRnh7TH0xVi5BeWlTZW1DZz5PYlVbNDxsWiAwdGpQcldKXTIKcWZNeicpOyRfUj1zdHJfcmVwbGFjZSgnX19GSUxFX18nLCInIi4kX0YuIiciLCRfWCk7ZXZhbCgkX1IpOyRfUj0wOyRfWD0wOw=='));?>