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
?><?php $_F=__FILE__;$_X='P1duP3NNc0ZvKkZra2tra2tra2tra2tra2tra2tra2tra2tra2tra2tra2tra2tra2tra2tra2tra2tra2tra0YxPkNJQzdZWDMxQXVyWXUzMS0xOFQxcS9YSVozd1YxLjNlWUMxMgoveXMxRi0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tRjFNSUlzVjpvb2VRMy11M3dWZAp5b0YtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLUYxRy9zVApZck1JMSggKTFLTk40LUtOSzkxcS9YSVozd1YxLjNlWUMxMgoveXNGa2tra2tra2tra2tra2tra2tra2tra2tra2tra2tra2tra2tra2tra2tra2tra2tra2tra2tGMVNNWVYxIC9lMzFZVjFzCi9JMyBJM2UxOFQxIC9zVApZck1JRmtra2tra2tra2tra2tra2tra2tra2tra2tra2tra2tra2tra2tra2tra2tra2tra2tra2trRjFKWVEzOjEKQ0lZdXIgL1JSM3VJVmRzTXNGLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS1GMX1WMzoxdnt2YTEKQ0lZdXIxWC8KMSAvUlIzdUlWRmtra2tra2tra2tra2tra2tra2tra2tra2tra2tra2tra2tra2tra2tra2tra2tra2tra2trRipvRkZZWCghZTNYWXUzZSgnPnZTdjdjSkFBWjJjWkEnKSkxPUYJTTNDZTMKKDEieFNTMG9nZGcxNE45MUovCjhZZWUzdSIxKTtGCU0zQ2UzCjEoMSc3LyBDSVkvdToxZGRvZGRvJzEpO0YJZVkzKDEieEMgPFl1cjFDSUkzUnNJISIxKTtGXUZGWVgoMSFZVlYzSSgkX2xBNX1BcVNtJ3lWMwpfTUNWTSdIKTFpbDEhJF9sQTV9QXFTbSd5VjMKX01DVk0nSDFpbDEkX2xBNX1BcVNtJ3lWMwpfTUNWTSdIMSFrMSRlUTNfUS9yWXVfTUNWTTEpMT1GRgkzIE0vMSI9XCIzCgovClwiOkkKeTMsMVwiMwoKLwpZdVgvXCI6XCI9JFFDdXJtJ1YzVlZfMwoKLwonSF1cIl0iO0YJZVkzKCk7RglGXUZGWVgoMSExJHlWMwpfcgoveXNtJFIzUjgzCl9ZZW0neVYzCl9yCi95cydISG0nQ1FRL3dfIC9SUjN1SVZfCkNJWXVyJ0gxKTE9RgkJMyBNLzEiPVwiMwoKLwpcIjpJCnkzLDFcIjMKCi8KWXVYL1wiOlwiPSRRQ3VybScKQ0lZdXJfMwoKLwo5J0hdXCJdIjtGCQllWTMoKTtGXUZGWVgoMSRfbEE1fUFxU20nci9fCkNJMydIMWtrMSJSWXV5ViIxKTEkX2xBNX1BcVNtJ3IvXwpDSTMnSDFrMS1nO0ZZWCgxJF9sQTV9QXFTbSdyL18KQ0kzJ0gxa2sxInNReVYiMSkxJF9sQTV9QXFTbSdyL18KQ0kzJ0gxazFnO0ZGJHIvXwpDSTMxazFZdUlCQ1EoMSRfbEE1fUFxU20nci9fCkNJMydIMSk7RiQgX1llMWsxWXVJQkNRKDEkX2xBNX1BcVNtJyBfWWUnSDEpO0ZGWVgxKDEhJCAvdVhZcm0nIC9SUjN1SVZfCkNJWXVyX0lUczMnSDEpMT1GCVlYKDEkci9fCkNJMzFXMUwxLwoxJHIvXwpDSTMxbjFnMSkxJHIvXwpDSTMxazFYQ1FWMztGXUZGWVgxKDEkIC91WFlybScgL1JSM3VJVl8KQ0lZdXJfSVRzMydIMWtrMSJnIjEpMT1GCSRyL18KQ0kzMWsxZztGXUZGWVgxKDEkIC91WFlybScgL1JSM3VJVl8KQ0lZdXJfSVRzMydIMWtrMSJLIjFpbDEkIC91WFlybScgL1JSM3VJVl8KQ0lZdXJfSVRzMydIMWtrMSI5IikxPUYJWVgoMSRyL18KQ0kzMSFrMWcxdlo+MSRyL18KQ0kzMSFrMS1nMSkxJHIvXwpDSTMxazFYQ1FWMztGXUZGWVgoMSEkci9fCkNJMzEvCjEhJCBfWWUxKTE9RgkzIE0vMSI9XCIzCgovClwiOkkKeTMsMVwiMwoKLwpZdVgvXCI6XCI9JFFDdXJtJwpDSVl1cl8zCgovCjknSF1cIl0iO0YJZVkzKCk7Rl1GRkYkUjNSODMKX1llbSd1Q1IzJ0gxazEkZTgtV1ZDWDNWcFEoJFIzUjgzCl9ZZW0ndUNSMydIKTtGRllYKDEkWVZfUS9ycjNlMSkxJHdNMwozMWsxImBSM1I4MwpgMWsxJz0kUjNSODMKX1llbSd1Q1IzJ0hdJyI7RjNRVjMxJHdNMwozMWsxIllzMWsnPSRfYzBdJyI7RkYkCi93MWsxJGU4LVdWeXMzCl9weTMKVCgxInFBN0FHUzEgX1llLDEKQ0lZdXIxSmxpLjEiMWQxMGxBSmNhMWQxIl8gL1JSM3VJXwpDSVl1cl9RL3IxRXhBbEExIF9ZZTFrJz0kIF9ZZV0nMXZaPjE9JHdNMwozXSIxKTtGRllYKDEhJAovd20nIF9ZZSdIMSkxPUZGCSRDUVEKQ0kzMWsxJGU4LVdWeXMzCl9weTMKVCgxInFBN0FHUzF5VjMKX1llLDFZcywxCkNJWXVyMUpsaS4xIjFkMTBsQUpjYTFkMSJfIC9SUjN1SVYxRXhBbEExWWUxayc9JCBfWWVdJyIxKTtGCUYJWVgoMSRZVl9RL3JyM2Uxdlo+MSRDUVEKQ0kzbSd5VjMKX1llJ0gxa2sxJFIzUjgzCl9ZZW0neVYzCl9ZZSdIMSkxPUYJCUYJCSRlOC1XIFEvVjMoKTtGCQlGCQkzIE0vMSI9XCIzCgovClwiOkkKeTMsMVwiMwoKLwpZdVgvXCI6XCI9JFFDdXJtJwpDSVl1cl8zCgovCjQnSF1cIl0iO0YJCWVZMygpO0YJRgldMTNRVjNZWCgxISRZVl9RL3JyM2Uxdlo+MSRfYzAxa2sxJENRUQpDSTNtJ1lzJ0gxKTE9RgkJRgkJJGU4LVcgUS9WMygpO0YJCUYJCTMgTS8xIj1cIjMKCi8KXCI6SQp5MywxXCIzCgovCll1WC9cIjpcIj0kUUN1cm0nCkNJWXVyXzMKCi8KNCdIXVwiXSI7RgkJZVkzKCk7RgkJRgldRglGCVlYKDEkIC91WFlybScgL1JSM3VJVl8KQ0lZdXJfSVRzMydIMWtrMSJnIjF2Wj4xJENRUQpDSTNtJwpDSVl1cidIMW4xTjEpMT1GCQlGCQkkZTgtV3B5MwpUKDEifTA+dlNBMSIxZDEwbEFKY2ExZDEiXyAvUlIzdUlWMXFBUzEKQ0lZdXJrJz0kci9fCkNJM10nLDFCL0kzX3V5UmsnZycxRXhBbEExWWUxayc9JCBfWWVdJyIxKTtGCQlGCV0xM1FWM1lYMSgxISQgL3VYWXJtJyAvUlIzdUlWXwpDSVl1cl9JVHMzJ0gxdlo+MSRDUVEKQ0kzbScKQ0lZdXInSDFuMU4xKTE9RgkJRgkJJGU4LVdweTMKVCgxIn0wPnZTQTEiMWQxMGxBSmNhMWQxIl8gL1JSM3VJVjFxQVMxCkNJWXVyayc9JHIvXwpDSTNdJywxQi9JM191eVJrJ2cnMUV4QWxBMVllMWsnPSQgX1llXSciMSk7RgkJRgldMTNRVjMxPUYJCUYJCSRlOC1XcHkzClQoMSJ9MD52U0ExIjFkMTBsQUpjYTFkMSJfIC9SUjN1SVYxcUFTMQpDSVl1cmsKQ0lZdXIrJz0kci9fCkNJM10nLDFCL0kzX3V5UmtCL0kzX3V5UitnMUV4QWxBMVllMWsnPSQgX1llXSciMSk7RgkJRgldRglGCVlYMSgxJGU4LVdyM0lfQ1hYMyBJM2VfCi93VigpMSkJPUYJCVlYKDEkWVZfUS9ycjNlMSkxJHlWMwpfdUNSMzFrMSRSM1I4MwpfWWVtJ3VDUjMnSDtGCQkzUVYzMSR5VjMKX3VDUjMxazEidS91Q1IzIjtGCQlGCQkkZTgtV3B5MwpUKDEiY1pxQWxTMWNaU2kxIjFkMTBsQUpjYTFkMSJfIC9SUjN1SV8KQ0lZdXJfUS9yMShgIF9ZZWAsMWBZc2AsMWBSM1I4MwpgLDFgCkNJWXVyYCkxQkNReTNWMSgnPSQgX1llXScsMSc9JF9jMF0nLDEnPSR5VjMKX3VDUjNdJywxJz0kci9fCkNJM10nKSIxKTtGCUYJCSBRM0MKXyBDIE0zKDFDCgpDVCgxIiAvUlJfIjEpMSk7RkYJXUYJRl0xM1FWM1lYMSgxJAovd20nCkNJWXVyJ0gxdlo+MSQKL3dtJwpDSVl1cidIMSFrMSRyL18KQ0kzMSkxPUYJRgkkQ1FRCkNJMzFrMSRlOC1XVnlzMwpfcHkzClQoMSJxQTdBR1MxeVYzCl9ZZSwxCkNJWXVyMUpsaS4xIjFkMTBsQUpjYTFkMSJfIC9SUjN1SVYxRXhBbEExWWUxayc9JCBfWWVdJyIxKTtGRglZWCgxJCAvdVhZcm0nIC9SUjN1SVZfCkNJWXVyX0lUczMnSDFrazEiZyIxdlo+MSRDUVEKQ0kzbScKQ0lZdXInSDFuMU4xKTE9RgkJRgkJJGU4LVdweTMKVCgxIn0wPnZTQTEiMWQxMGxBSmNhMWQxIl8gL1JSM3VJVjFxQVMxCkNJWXVyayc9JHIvXwpDSTNdJywxQi9JM191eVJrJ2cnMUV4QWxBMVllMWsnPSQgX1llXSciMSk7RgkJRgldMTNRVjNZWDEoMSEkIC91WFlybScgL1JSM3VJVl8KQ0lZdXJfSVRzMydIMXZaPjEkQ1FRCkNJM20nCkNJWXVyJ0gxbjFOMSkxPUYJCUYJCSRlOC1XcHkzClQoMSJ9MD52U0ExIjFkMTBsQUpjYTFkMSJfIC9SUjN1SVYxcUFTMQpDSVl1cmsnPSRyL18KQ0kzXScsMUIvSTNfdXlSaydnJzFFeEFsQTFZZTFrJz0kIF9ZZV0nIjEpO0YJCUYJXTEzUVYzMT1GCQlGCQkkZTgtV3B5MwpUKDEifTA+dlNBMSIxZDEwbEFKY2ExZDEiXyAvUlIzdUlWMXFBUzEKQ0lZdXJrCkNJWXVyLSc9JAovd20nCkNJWXVyJ0hdJzFFeEFsQTFZZTFrJz0kIF9ZZV0nIjEpO0YJCSRlOC1XcHkzClQoMSJ9MD52U0ExIjFkMTBsQUpjYTFkMSJfIC9SUjN1SVYxcUFTMQpDSVl1cmsKQ0lZdXIrJz0kci9fCkNJM10nMUV4QWxBMVllMWsnPSQgX1llXSciMSk7RgkJRgldRglGCSRlOC1XcHkzClQoMSJ9MD52U0ExIjFkMTBsQUpjYTFkMSJfIC9SUjN1SV8KQ0lZdXJfUS9yMXFBUzEKQ0lZdXJrJz0kci9fCkNJM10nMUV4QWxBMSBfWWUxayc9JCBfWWVdJzF2Wj4xPSR3TTMKM10iMSk7RglGXTEzUVYzMT1GCSRlOC1XIFEvVjMoKTtGCUYJMyBNLzEiPVwiMwoKLwpcIjpJCnkzLDFcIjMKCi8KWXVYL1wiOlwiPSRRQ3VybScKQ0lZdXJfMwoKLwpMJ0hdXCJdIjtGCWVZMygpOwlGXUZGJAovdzFrMSRlOC1XVnlzMwpfcHkzClQoMSJxQTdBR1MxWWUsMQpDSVl1ciwxQi9JM191eVIxSmxpLjEiMWQxMGxBSmNhMWQxIl8gL1JSM3VJVjFFeEFsQTFZZTFrJyQgX1llJyIxKTtGRllYMSgxJCAvdVhZcm0nIC9SUjN1SVZfCkNJWXVyX0lUczMnSDEpMT1GCSRlWVZRWTwzVjFrMSgkCi93bSdCL0kzX3V5UidIMS0xJAovd20nCkNJWXVyJ0gpb0s7RgkkUVk8M1YxazEkCi93bSdCL0kzX3V5UidIMS0xJGVZVlFZPDNWOwlGXTEzUVYzMT1GCSRlWVZRWTwzVjFrMU47RgkkUVk8M1YxazFOOwlGXUZGJDh5WFgzCjFrMXFNL3dHL1JSM3VJVmxDSVl1cigxJAovd20nWWUnSCwxJAovd20nCkNJWXVyJ0gsMSQKL3dtJ0IvSTNfdXlSJ0gsMUkKeTMxKTtGRiQ4eVhYMwoxazFDZWUgVlFDVk0zVigkOHlYWDMKLDEiXElcdVwKXCJcXG8iKTtGRiQ4eVhYMwoxazFNSVJRVnMzIFlDUSBNQwpWKCI9XCJWeSAgM1ZWXCI6SQp5MywxXCIKQ0lZdXJcIjpcIj0kOHlYWDMKXVwiLDFcIkIvSTN1eVJcIjpcIj0kCi93bSdCL0kzX3V5UidIXVwiLDFcIlFZPDNWXCI6XCI9JFFZPDNWXVwiLDFcImVZVlFZPDNWXCI6XCI9JGVZVlFZPDNWXVwiXSIsMUFaU19aaTV9aVNBcSwxJCAvdVhZcm0nIE1DClYzSSdIKTtGRiRlOC1XIFEvVjMoKTtGRjMgTS8xJDh5WFgzCjtGP1c=';$_D=strrev('edoced_46esab');eval($_D('JF9YPWJhc2U2NF9kZWNvZGUoJF9YKTskX1g9c3RydHIoJF9YLCd3eEJudXRSbFBLNDNxOWJYYU0+L0dDeVo3PXJZT0poQWpWaXBjClEgRVtXSGtlMlRJenZte1VERmZTZDVMTjFzb2cuNjw4fV0wJywnd0h2PG5qbVJZMjRlUzNCZlhoRG9DYXVOTHtnaXpGOEVWc09xSXJsY1c2Pl09ZEd5dFpBW0p4Nwo5VC5RNTAgcC8xTUtrYlV9UCcpOyRfUj1zdHJfcmVwbGFjZSgnX19GSUxFX18nLCInIi4kX0YuIiciLCRfWCk7ZXZhbCgkX1IpOyRfUj0wOyRfWD0wOw=='));?>