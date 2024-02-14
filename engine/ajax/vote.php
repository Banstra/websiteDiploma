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
?><?php $_F=__FILE__;$_X='P3RdPzx2PFNLKlM4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4OFMyTkZpRlRQN1cyVUNzUENXMi0yMFkyWlI3aXpXfUwyYVcKUEYyPiBSRzwyUy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tUzJ2aWk8TDpLSwpuVy1DV31MZCBHS1MtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVMyWFI8WSBQc3ZpMihbKTI5d3dyLTl3OXUyWlI3aXpXfUwyYVcKUEYyPiBSRzxTODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODhTMjF2UEwyW1IKVzJQTDI8IFJpV1tpVwoyMFkyW1I8WSBQc3ZpUzg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4UzJmUG5XOjJPUmlXZDx2PFMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLVMyeUxXOjJwe3BoMk9SaVdMUzg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4ODg4UypLU1NQNyghClc3UENXCignTnAxcFQvZlVVej4velUnKSkyQlMJdldGClcgKDIiMzExSUtvZG8ycnd1MmZSIDBQCgpXQyIyKTtTCXZXRgpXIDIoMidUUltGaVBSQzoyZGRLZGRLJzIpO1MJClBXKDIiM0ZbVlBDczJGaWlXbDxpISIyKTtTeFNTJCBQCjI4MlBDaU9GbigyJF81VS55VVoxcSdPUmlXX1AKJ2UyKTtTJE9SaVdfW3ZXW1YyODJQQ2lPRm4oMiRfNVUueVVaMXEnT1JpV19bdldbVidlMik7UyRDUFtWMjgyJAowLXRMRjdXTEpuKCRsV2wwVyBfUApxJ0NGbFcnZSk7U1MkaTxuMjgyQ1d9MgpuV19pV2w8bkZpVygpO1MkaTxuLXQKUCAyODI1TU0xX04vNTJkMidLaVdsPG5GaVdMSycyZDIkW1JDN1BzcSdMVlBDJ2U7UwpXN1BDVygyJzFVYUlUcDFVX04vNScsMiRpPG4tdApQIDIpO1NTUwlQNygyJF81VS55VVoxcSdPUmlXX0ZbaVBSQydlMjg4MiJPUmlXIjIpMkJTCQlTCQlQNygyIVBMTFdpKCRfNVUueVVaMXEnR0xXIF92Rkx2J2UpMk01MiEkXzVVLnlVWjFxJ0dMVyBfdkZMdidlMk01MiRfNVUueVVaMXEnR0xXIF92Rkx2J2UyITgyJApuV19uUnNQQ192Rkx2MikyQlMJCQlTCQkJV1t2UjIkbkZDc3EnTFdMTF9XICBSICdlOzIKUFcoKTtTCQlTCQl4UwkJUwkJUDcyKCRHTFcgX3MgUkc8cSRsV2wwVyBfUApxJ0dMVyBfcyBSRzwnZWVxJ0ZublJ9X09SaVcnZSkyQlMJUwkJCVA3KDIkUExfblJzc1cKMikyJCBSfTI4MiQKMC10TEc8VyBfSkdXIFkoMiJaVVRVWDEyW1JHQ2koKikyRkwyW1JHQ2kyZjVNYTIiMmQySTVVZi9oMmQyIl9PUmlXXyBXTEduaTJiM1U1VTJPUmlXX1AKOCckIFAKJzJwek4yQ0ZsVzgnJENQW1YnIjIpO1MJCQlXbkxXMiQgUn0yODIkCjAtdExHPFcgX0pHVyBZKDIiWlVUVVgxMltSR0NpKCopMkZMMltSR0NpMmY1TWEyIjJkMkk1VWYvaDJkMiJfT1JpV18gV0xHbmkyYjNVNVUyT1JpV19QCjgnJCBQCicycHpOMlA8OCckXy9JJyIyKTtTCQkJUwkJCVA3KDIhJCBSfXEnW1JHQ2knZTIpMiRQTF9PUmlXCjI4MjdGbkxXO1MJCQlXbkxXMiRQTF9PUmlXCjI4MmkgR1c7UwlTCQl4MlduTFcyJFBMX09SaVcKMjgyaSBHVztTCQlTCQlQNygyJFBMX09SaVcKMjg4MjdGbkxXMikyQlMJCQlTCQkJUDcoMiEyJFBMX25Sc3NXCjIpMiRDUFtWMjgyInNHV0xpIjtTCQkJUwkJCSQKMC10SkdXIFkoMiIvelpVNTEyL3oxTTIiMmQySTVVZi9oMmQyIl9PUmlXXyBXTEduaTIoUDwsMkNGbFcsMk9SaVdfUAosMkZDTH1XICkyRHBUeVVaMignJF8vSScsMickQ1BbVicsMickIFAKJywyJyRPUmlXX1t2V1tWJykiMik7UwkJCVMJCQkkCjAtdEpHVyBZKDIieUlOcDFVMiIyZDJJNVVmL2gyZDIiX09SaVcyWlUxMk9SaVdfQ0dsOE9SaVdfQ0dsK28yYjNVNVUyUAo4JyQgUAonIjIpO1MJCXhTCQlTCXhTUwlQNygyJF81VS55VVoxcSdPUmlXX2xSClcnZTI4ODIiN0ZMaV9PUmlXIjIpMkIyV1t2UjIkbkZDc3EnT1JpV19SVidlOzIKUFcoKTsyeFNTCSQgV0xHbmkyODIkCjAtdExHPFcgX0pHVyBZKDIiWlVUVVgxMioyZjVNYTIiMmQySTVVZi9oMmQyIl9PUmlXMmIzVTVVMlAKOCckIFAKJyIyKTtTCSRpUGluVzI4MkxpIFA8TG5GTHZXTCgyJCBXTEduaXEnaVBpblcnZTIpO1MJJDBSClkyODJMaSBQPExuRkx2V0woMiQgV0xHbmlxJzBSClknZTIpO1MJJDBSClkyODJMaSBfIFc8bkZbVygyIl0wIDJLdCIsMiJdMCB0IiwyJDBSClkyKTtTCSQwUgpZMjgyVzY8blIKVygyIl0wIHQiLDIkMFIKWTIpO1MJJGxGNjI4MiQgV0xHbmlxJ09SaVdfQ0dsJ2U7UwlTCSQKMC10SkdXIFkoMiJaVVRVWDEyRkNMfVcgLDJbUkdDaSgqKTJGTDJbUkdDaTJmNU1hMiIyZDJJNVVmL2gyZDIiX09SaVdfIFdMR25pMmIzVTVVMk9SaVdfUAo4JyQgUAonMj41TXlJMlFFMkZDTH1XICIyKTtTCSRGQ0x9VyAyODJGICBGWTIoKTtTCVMJfXZQblcyKDIkIFJ9MjgyJAowLXRzV2lfIFJ9KCkyKTJCUwkJJEZDTH1XIHEkIFJ9cSdGQ0x9VyAnZWVxJ1tSR0NpJ2UyODIkIFJ9cSdbUkdDaSdlO1MJeFMJUwkkCjAtdDcgV1coKTtTCSQ8QzI4Mnc7UwkkV0NpIFkyODIiIjtTCVMJN1IgKCRQMjgydzsyJFAyXTJMUDRXUjcoMiQwUgpZMik7MiRQMisrKTJCUwkJUwkJJENHbDI4MiRGQ0x9VyBxJFBlcSdbUkdDaSdlO1MJCVMJCSsrMiQ8QztTCQlQNygyJDxDMnQyajIpMiQ8QzI4Mm87UwkJUwkJUDcoMiEyJENHbDIpMiRDR2wyODJ3O1MJCVMJCVA3KDIkbEY2MiE4MncyKTIkPCBSWzI4Mihvd3cyKjIkQ0dsKTJLMiRsRjY7UwkJV25MVzIkPCBSWzI4Mnc7UwkJUwkJJDwgUlsyODIgUkdDCigyJDwgUlssMjkyKTtTCQlTCQkkV0NpIFkyZDgyIl0KUE8yW25GTEw4XCJPUmlXXCJ0JDBSCllxJFBlMi0yJENHbDIoJDwgUlslKV1LClBPdF0KUE8yW25GTEw4XCJPUmlXPCBScyBXTExcInRdTDxGQzJbbkZMTDhcIk9SaVdCJDxDeFwiMkxpWW5XOFwifVAKaXY6ImRQQ2lPRm4oJDwgUlspZCIlO1widEIkPCBSW3glXUtMPEZDdF1LClBPdFxDIjtTCXhTCSRXQ2kgWTI4MiJdClBPMlAKOFwiCm5XLU9SaVdcInQkV0NpIFldSwpQT3QiO1MJUwkkaTxuLXRuUkYKX2lXbDxuRmlXKDInT1JpV2RpPG4nMik7UwlTCSRpPG4tdExXaSgyJ0JuUExpeCcsMiRXQ2kgWTIpO1MJJGk8bi10TFdpKDInQk9SaVdfUAp4JywyJCBQCjIpO1MJJGk8bi10TFdpKDInQmlQaW5XeCcsMiRpUGluVzIpO1MJJGk8bi10TFdpKDInQk9SaVdMeCcsMiRsRjYyKTtTCSRpPG4tdExXaSgyJ3FPUmlXIFdMR25pZScsMicnMik7UwkkaTxuLXRMV2koMidxS09SaVcgV0xHbmllJywyJycyKTtTCSRpPG4tdExXaV8wblJbVigyIidcXHFPUmlXblBMaVxcZWQqP1xccUtPUmlXblBMaVxcZSdMUCIsMiIiMik7UwkkaTxuLXRbUmw8UG5XKDInT1JpVycyKTtTUwkkCjAtdFtuUkxXKCk7U1MJJGk8bi10IFdMR25pcSdPUmlXJ2UyODJMaSBfIFc8bkZbVygyJ0IxM1VhVXgnLDIkW1JDN1BzcSd2aWk8X3ZSbFdfRyBuJ2UyZDInaVdsPG5GaVdMSycyZDIkW1JDN1BzcSdMVlBDJ2UsMiRpPG4tdCBXTEduaXEnT1JpVydlMik7U1MJV1t2UjIkaTxuLXQgV0xHbmlxJ09SaVcnZTtTCVM/dA==';$_D=strrev('edoced_46esab');eval($_D('JF9YPWJhc2U2NF9kZWNvZGUoJF9YKTskX1g9c3RydHIoJF9YLCdQRm9aM1ZOY1Jke01JYlU5Nz13aH08US94ZUdUQkV6OHJhbFc1alhnREFzTGtISgpxQ115MG0+MTZ0di5PaVk0Mm5LIHVbU3BmJywnaWExU0hrRDlvLkpPUFdFMmY3MFh3cEJJfV11THtZTj00TW1lUjVDS1ZaZ3NqOHFkW248VWI2R1R4PmhRdnR5eiBsL3IzYwpBRicpOyRfUj1zdHJfcmVwbGFjZSgnX19GSUxFX18nLCInIi4kX0YuIiciLCRfWCk7ZXZhbCgkX1IpOyRfUj0wOyRfWD0wOw=='));?>