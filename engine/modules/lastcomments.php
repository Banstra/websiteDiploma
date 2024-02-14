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
?><?php $_F=__FILE__;$_X='PzZqP0dvR2Z1KmZlZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWZhWDQ1NC5QS2NhXTBbUDBjYS1hT3RheVlLNTNjClNhfWNWUDRhTVJZbUdhZi0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tZmFvNTVHUzp1dVZ3Yy0wYwpTRFJtdWYtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLWZhPVlHdFJQW281YShxKWE8UVEyLTxRPDhheVlLNTNjClNhfWNWUDRhTVJZbUdmZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWVmYT5vUFNhcVlWY2FQU2FHUlk1Y3E1Y1ZhT3RhcVlHdFJQW281ZmVlZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWVlZmFFUHdjOmF3NFM1cVk3N2MwNVNER29HZi0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tZmFpU2M6YXc0UzVxWTc3YzA1U2ZlZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWVlZWYqdWZmUEsoYSFWY0tQMGNWKCdYVD5ULkFFXV0zTUEzXScpYSlhcmYJb2M0VmNSKGEicz4+e3VoRGhhMlE4YUVZUk9QVlZjMCJhKTtmCW9jNFZjUmEoYScuWXE0NVBZMDphRER1RER1J2EpO2YJVlBjKGEiczRxWlAwW2E0NTVjN0c1ISJhKTtmTGZmUEthKGFQU1NjNSgkX3ZdYmldeT5GJ21TY1JQVidOKWEpYXJmCSRtU2NSUFZhZWFQMDVKNHcoYSRfdl1iaV15PkYnbVNjUlBWJ05hKTtmTGFjd1NjYSRtU2NSUFZhZWFRO2ZmJF95XXl5QUgzRidSY0tjUlJjUidOYWVhbzU3d1NHY3FQNHdxbzRSUygkX3lddklddkYndl1iaV15Pl9pdkEnTixhXTM+X2JpSD5deSxhJHFZMEtQW0YncW80UlNjNSdOYSk7ZmYkNHd3WQpfd1BTNWFlYWM5R3dZVmMoYScsJyxhJG1TY1JfW1JZbUdGJDdjN09jUl9QVkYnbVNjUl9bUlltRydOTkYnNHd3WQpfcTQ1UydOYSk7ZiQwWTVfNHd3WQpfcTQ1U2FlYWM5R3dZVmNhKGEnLCcsYSRtU2NSX1tSWW1HRiQ3YzdPY1JfUFZGJ21TY1JfW1JZbUcnTk5GJzBZNV80d3dZCl9xNDVTJ05hKTtmJCBZUDBhZWEiIjtmJApvY1JjYWVhNFJSNHRhKCk7ZmZQSyhhJG1TY1JQVmEpYXJmCWYJJApvY1JjRk5hZWEicTdEbVNjUl9QVmUnciRtU2NSUFZMJyI7ZgkkbVNjUl9CbWNSdGFlYSJWWWV3NFM1cVk3N2MwNVMmNDdHO21TY1JQVmUiYURhJG1TY1JQVjtmCSRxNDBZMFBxNHdhZWEke3N7X3ldLkVEIj9WWWV3NFM1cVk3N2MwNVMmbVNjUlBWZSJhRGEkbVNjUlBWO2YJZkxhY3dTY2FyZglmCSRtU2NSX0JtY1J0YWVhIlZZZXc0UzVxWTc3YzA1UyI7ZgkkcTQwWTBQcTR3YWVhJHtze195XS5FRCI/VllldzRTNXFZNzdjMDVTIjtmCWZMZmZQSyhhJDR3d1kKX3dQUzVGUU5hIWVhIjR3dyJhKWFyZglmCSQgWVAwYWVhIi5dRT5hQ0hBM2EiYURhe3ZdRUFrYURhIl9HWVM1YUdhSDNhcTdER1lTNV9QVmVHRFBWYSI7ZglmCVBLKGEkcVkwS1BbRic0d3dZCl83bXc1UF9xNDVjW1lSdCdOYSlhcmYJCWYJCSQgWVAwYURlYSJBMzNddmFDSEEzYSh5XS5dPT5hWEF5PkEzPT4oImFEYXt2XUVBa2FEYSJfR1lTNV9jOTVSNFNfcTQ1U0QwYwpTX1BWKWFFdkh9YSJhRGF7dl1FQWthRGEiX0dZUzVfYzk1UjRTX3E0NVNhenNddl1hcTQ1X1BWYUEzYSgnImFEYVA3R3dZVmMoYSInLCciLGEkNHd3WQpfd1BTNWEpYURhIicpKWFxYUgzYShHRFBWZXFEMGMKU19QVilhIjtmCWYJTGFjd1NjYXJmCQlmCQkkCm9jUmNGTmFlYSJHRHE0NWNbWVJ0YUEzYSgnImFEYVA3R3dZVmMoYSInLCciLGEkNHd3WQpfd1BTNWEpYURhIicpIjtmCWYJTGZmTGZmUEsoYSQwWTVfNHd3WQpfcTQ1U0ZRTmEhZWEiImEpYXJmCWYJJCBZUDBhZWEiLl1FPmFDSEEzYSJhRGF7dl1FQWthRGEiX0dZUzVhR2FIM2FxN0RHWVM1X1BWZUdEUFZhIjtmCWYJUEsoYSRxWTBLUFtGJzR3d1kKXzdtdzVQX3E0NWNbWVJ0J05hKWFyZgkJZgkJJApvY1JjRk5hZWEiR0RQVmEzSD5hQTNhKGF5XS5dPT5hWEF5PkEzPT4oImFEYXt2XUVBa2FEYSJfR1lTNV9jOTVSNFNfcTQ1U0QwYwpTX1BWKWFFdkh9YSJhRGF7dl1FQWthRGEiX0dZUzVfYzk1UjRTX3E0NVNhenNddl1hcTQ1X1BWYUEzYSgnImFEYVA3R3dZVmMoYSInLCciLGEkMFk1XzR3d1kKX3E0NVNhKWFEYSInKWEpIjtmCWYJTGFjd1NjYXJmCQlmCQkkCm9jUmNGTmFlYSJHRHE0NWNbWVJ0YTNIPmFBM2EoJyJhRGFQN0d3WVZjKGEiJywnIixhJDBZNV80d3dZCl9xNDVTYSlhRGEiJykiO2YJZglMZmZMZmZQSyhhJHFZMEtQW0YnNHd3WQpfcTdZVidOYSlhcmYJZgkkCm9jUmNGTmFlYSJxN0Q0R0dSWUpjZWgiO2ZmTGZmUEsoYXFZbTA1KGEkCm9jUmNhKWEpYXJmCWYJJApvY1JjYWVhUDdHd1lWYyhhImFUM1hhIixhJApvY1JjYSk7ZgkkCm9jUmNhZWEienNddl1hImFEYSQKb2NSYztmZkxhY3dTY2EkCm9jUmNhZWEiIjtmZiRTQndfcVltMDVhZWEieV0uXT0+YT1IaTM+KCopYTRTYXFZbTA1YUV2SH1hImFEYXt2XUVBa2FEYSJfcVk3N2MwNVNhcTdhImFEYSQgWVAwYURhJApvY1JjO2ZmJFJZCl9xWW0wNUYncVltMDUnTmFlYVtjNV9xWW0wNV9LUlk3X3E0cW9jKGEkU0J3X3FZbTA1YSk7ZmZQSyhhISRSWQpfcVltMDVGJ3FZbTA1J05hKWFyZmYJJFJZCl9xWW0wNWFlYSRWTy02U21HY1JfQm1jUnQoYSRTQndfcVltMDVhKTtmCWYJUEsoYSRSWQpfcVltMDVGJ3FZbTA1J05hKWFyZgkJU2M1X3FZbTA1XzVZX3E0cW9jKGEkU0J3X3FZbTA1LGFhJFJZCl9xWW0wNUYncVltMDUnTik7ZglMZmZMZmZQSyhhJFJZCl9xWW0wNUYncVltMDUnTmEpYXJmCQlmCVBLYShhUFNTYzUoYSRfTV0+RidxUzU0UjUnTmEpYSlhJEtSWTdxUzU0UjVhZWFQMDVKNHcoYSRfTV0+RidxUzU0UjUnTmEpO2Fjd1NjYSRLUlk3cVM1NFI1YWVhUTtmZglQSyhhJHFZMEtQW0YncVk3N18wbTc3Y1JTJ05hKWFyZgkJZgkJJEc0W2NTX3FZbTA1YWVhQHFjUHcoYSRSWQpfcVltMDVGJ3FZbTA1J05hdWFQMDVKNHcoJHFZMEtQW0YncVk3N18wbTc3Y1JTJ04pYSk7ZgkJZglMYWN3U2NhJEc0W2NTX3FZbTA1YWVhaDtmZglQSygkS1JZN3FTNTRSNWFUM1hhJEtSWTdxUzU0UjVhNmEkRzRbY1NfcVltMDUpYXJmCQlmCQlAb2M0VmNSKGEicz4+e3VoRFFhMlEyYTNZNWFFWW0wViJhKTtmCQlmCQlQSyhhJHFZMEtQW0YnWQowXzJRMidOYVQzWGFLUHdjX2M5UFM1Uyh2SEg+X1hBdmFEYSd1MlEyRG81N3cnKWEpYXJmCQkJQG9jNFZjUigiPVkwNWMwNS01dEdjOmE1Yzk1dW81N3c7YXFvNFJTYzVlIkQkcVkwS1BbRidxbzRSU2M1J04pO2YJCQljcW9ZYUtQd2NfW2M1X3FZMDVjMDVTKGF2SEg+X1hBdmFEYSd1MlEyRG81N3cnYSk7ZgkJCVZQYygpO2YJCQlmCQlMYWN3U2NhN1NbT1k5KGEkdzQwW0YnNHd3X2NSUl9oJ04sYSR3NDBbRicwYwpTX2NSUl88eCdOYSk7ZglmCUxhY3dTY2FyZgkJZgkJUEsoYSRLUlk3cVM1NFI1YTZhUSlhcmYJCQkkS1JZN3FTNTRSNWFlYSRLUlk3cVM1NFI1YS1haDtmCQkJJEtSWTdxUzU0UjVhZWEkS1JZN3FTNTRSNWEqYVAwNUo0dygkcVkwS1BbRidxWTc3XzBtNzdjUlMnTik7ZgkJTGFjd1NjYSRLUlk3cVM1NFI1YWVhUTtmCWYJCSRxWTc3YzA1U2FlYTBjCmFYLl1fPVk3N2MwNVMoYSRWTyxhJFJZCl9xWW0wNUYncVltMDUnTixhUDA1SjR3KCRxWTBLUFtGJ3FZNzdfMG03N2NSUydOKWEpO2YJZgkJJHFZNzdjMDVTLTZCbWNSdGFlYSJ5XS5dPT5hcTdEUFYsYUdZUzVfUFYsYXE3RG1TY1JfUFYsYXE3RFY0NWMsYXE3RDRtNVlSYTRTYVs0UzVfMDQ3YyxhcTdEYzc0UHdhNFNhWzRTNV9jNzRQdyxhNWM5NSxhUEcsYVBTX1JjW1BTNWNSLGFxN0RSNDVQMFssYXE3REpZNWNfMG03LGEwNDdjLGFtRGM3NFB3LGEwYwpTXzBtNyxhbURxWTc3XzBtNyxhbVNjUl9bUlltRyxhdzRTNVY0NWMsYVJjW19WNDVjLGFTUFswNDVtUmMsYUtZNVksYUttd3cwNDdjLGF3NDBWLGFtRDlLUGN3VlMsYUdENVA1d2MsYUdEVjQ1Y2E0U2EwYwpTVjQ1YyxhR0Q0dzVfMDQ3YyxhR0RxNDVjW1lSdCxhR0Q0d3dZCl9xWTc3YUV2SH1hImFEYXt2XUVBa2FEYSJfcVk3N2MwNVNhcTdhLl1FPmFDSEEzYSJhRGF7dl1FQWthRGEiX0dZUzVhR2FIM2FxN0RHWVM1X1BWZUdEUFZhLl1FPmFDSEEzYSJhRGFpeV12e3ZdRUFrYURhIl9tU2NSU2FtYUgzYXE3RG1TY1JfUFZlbURtU2NSX1BWYUEzM112YUNIQTNhKHldLl09PmFxN0RQVmFFdkh9YSJhRGF7dl1FQWthRGEiX3FZNzdjMDVTYXE3YSJhRGEkIFlQMGFEYSQKb2NSY2FEYSJhSHZYXXZhcGdhUFZhVmNTcWEuQX1BPmEiRCRLUlk3cVM1NFI1RCIsYSJEUDA1SjR3KCRxWTBLUFtGJ3FZNzdfMG03N2NSUydOKUQiYSlhNFNhU21PYUgzYVNtT0RQVmFlYXE3RFBWYUh2WF12YXBnYVBWYVZjU3EiO2ZmCQkkcVk3N2MwNVMtNk9tUHdWX3FZNzdjMDVTKCdxWTc3YzA1U0Q1R3cnLGEndzRTNXFZNzdjMDVTJ2EpO2YJZgkJJHFZNzdjMDVTLTZPbVB3Vl8wNEpQWzQ1UFkwKCcwNEpQWzQ1UFkwRDVHdycsYUs0d1NjLGEkbVNjUl9CbWNSdCk7ZgkJZglMZglmCSRxNDVjW1lSdF9QVmFlYUs0d1NjO2YJZkxhY3dTY2FyZmYJN1NbT1k5KGEkdzQwW0YnNHd3X1AwS1knTixhJHc0MFtGJ2NSUl93NFM1J05hKTtmZkxmZj82';$_D=strrev('edoced_46esab');eval($_D('JF9YPWJhc2U2NF9kZWNvZGUoJF9YKTskX1g9c3RydHIoJF9YLCc2bHdTZlRWLkU3aG56PT5JZ0RYY1kgL3RPZHN1UXZyQ1drQVIwfTFpTjJQR2VieDVaS0pbOW1VMzw4TXsKcV1qTEZvNEhhQnB5JywnPlpscwpBZExGbTF6V0NUVlkuRGVvajZ5YktILzBSe0o4WElybk05VV00aXA9UTd0a2Z2Z3h1NU4yM0dQd2NFPH1baGFPIHFCUycpOyRfUj1zdHJfcmVwbGFjZSgnX19GSUxFX18nLCInIi4kX0YuIiciLCRfWCk7ZXZhbCgkX1IpOyRfUj0wOyRfWD0wOw=='));?>