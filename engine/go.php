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
?><?php $_F=__FILE__;$_X='P3BdPzFkMTlrKjkgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDlpci8KL2FRU0lpSFlKUVlJaS1pV1BpenRTCktJb0Jpbkk0US9pPnN0UjFpOS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tOWlkCgoxQjprazRESS1ZSW9CRnNSazktLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLTlpNXQxUHNRSmQKaShFKWlndXVbLWd1Z2ppenRTCktJb0Jpbkk0US9pPnN0UjE5ICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICA5aS5kUUJpRXQ0SWlRQmkxc3QKSUUKSTRpV1BpRXQxUHNRSmQKOSAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgOWlsUURJOmlKdEYxZDE5LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS05aTNCSTppbHRzby9zNFFZSmlEUVl9QjkgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIDkqazk5SXNzdHNfc0kxdHMKUVlKaShpSF89YWFpXmlIX2Y9TUtMSz5pXmlIX3JIR01INT0uSHJpXmlIX0tiLkw1SGkpOzlRWVFfQkkKaShpJ0lzc3RzX3NJMXRzClFZSicsaUhfPWFhaV5pSF9mPU1LTEs+aV5pSF9ySEdNSDU9LkhyaV5pSF9LYi5MNUhpKTs5OVNSWUUKUXRZaXNJQkkKX1JzRCgkUnNEKWlBOTkJJFYvRFJJaSBpKEIKc1FZSikkUnNEOzkJJFYvRFJJaSBpQgpzX3NJMUQvRUlpKGkiZAoKMTprayIsaSIiLGkkUnNEaSk7OQkkVi9EUklpIGlCCnNfc0kxRC9FSWkoaSJkCgoxQjprayIsaSIiLGkkVi9EUklpKTs5CSRWL0RSSWkgaUIKc19zSTFEL0VJaShpIm9vb0YiLGkiIixpJFYvRFJJaSk7OQkkVi9EUklpIGlJVDFEdDRJaShpImsiLGkkVi9EUklpKTs5CSRWL0RSSWkgaXNJQkkKaShpJFYvRFJJaSk7OTkJc0kKUnNZaSRWL0RSSTs5OXc5OSRSc0RpIGlRQkJJCigkXz5ILnEnUnNEJzApaT9pKEIKc1FZSikkXz5ILnEnUnNEJzBpOmknJzs5JC9zSS9pIGlRQkJJCigkXz5ILnEnL3NJLycwKWk/aShCCnNRWUopJF8+SC5xJy9zSS8nMGk6aScnOzk5JFJzRGkgaXMvb1JzRDRJRXQ0SWkoaSRSc0RpaSk7OSRSc0RpIGlXL0JJN1tfNElFdDRJaShpJFJzRGkpOzkkUnNEaSBpZApYRF9JWQpRClBfNElFdDRJKCRSc0QsaUhLLl9OM2IuSHosaSJMemItT09VQy02Iik7OSRSc0RpIGlCCnNfc0kxRC9FSSgiXHMiLGkiIixpJFJzRCk7OSRSc0RpIGlCCnNfc0kxRC9FSSgiXFkiLGkiIixpJFJzRCk7OSRSc0RpIGlkClhEQjFJRVEvREVkL3NCKGlCCnNRMV8KL0pCKCRSc0QpLGlISy5fTjNiLkh6LGkiTHpiLU9PVUMtNiJpKTs5JFJzRGkgaUIKc19zSTFEL0VJaShpIiYvWDE7IixpIiYiLGkkUnNEaSk7OSRSc0RpIGkxc0lKX3NJMUQvRUkoaSJrbS9WL0JFc1ExCjprUSIsaSJtJiM2dTxnO1YvQkVzUTEKOiIsaSRSc0RpKTs5JFJzRGkgaTFzSUpfc0kxRC9FSShpIms0LwovOmtRIixpIjQmIzZ1PGc7CiYjNnU8Zzs6IixpJFJzRGkpOzk5UVMoaSExc0lKX1gvCkVkKGkiI14oZAoKMXxkCgoxQik6a2sjIixpJFJzRGkpaSlpQTkJJFJzRGkgaSdkCgoxOmtrJ2lGaSRSc0Q7OXc5OVFTKGlCCnNRMXRCKGkkUnNELGkiSnRGMWQxImkpaSEgIGlTL0RCSWliTWlCCnNRMXRCKGkkUnNELGkiNHQgSnQiaSlpISAgaVMvREJJKWlBOQlkSS80SXMoaSJoLi5HazZGNmlbdWppbHRzV1E0NElZImkpOzkJZEkvNElzaShpJ2F0RS8KUXRZOmlGRmsnaSk7OQk0UUlpKGkiPUVFSUJCaTRJWVFJNCEhISJpKTs5dzk5JF96SE17SE1xJ2guLkdfTUhsSE1ITScwaSBpUUJCSQooJF96SE17SE1xJ2guLkdfTUhsSE1ITScwKWk/aXNJQkkKX1JzRGkoaSRfekhNe0hNcSdoLi5HX01IbEhNSE0nMGkpaTppJyc7OSRfekhNe0hNcSdoLi5HX2hiei4nMGkgaXNJQkkKX1JzRGkoaSRfekhNe0hNcSdoLi5HX2hiei4nMGkpOzk5UVNpKCgkX3pITXtITXEnaC4uR19oYnouJzBpISBpJF96SE17SE1xJ2guLkdfTUhsSE1ITScwKWliTWkhJFJzRClpQTkJZEkvNElzKGkiaC4uR2s2RjZpW3VqaWx0c1dRNDRJWSJpKTs5CWRJLzRJc2koaSdhdEUvClF0WTppRkZrJ2kpOzkJNFFJaShpIj1FRUlCQmk0SVlRSTQhISEiaSk7OXc5OUBkSS80SXMoJ2MtY3p6LUdzdApJRQpRdFk6aTY7aVh0NEkgV0R0RX0nKTs5OVFTKGkoaSQvc0kvaSAgaSdFdFhYSVkKQidpPUtyaSRFdFlTUUpxJ0V0WFhfWXRzSVNJc3NJcycwaSlpYk1pKCEkL3NJL2k9S3JpJEV0WVNRSnEnWUlvQl9ZdHNJU0lzc0lzJzBpKWkpaUE5OQlAZEkvNElzKCdNSVNJc3NJcy1HdERRRVA6aVl0LXNJU0lzc0lzJyk7OXc5OUBkSS80SXMoJ2F0RS8KUXRZOmknaUZpJFJzRGkpOzk5NFFJaShpImFRWX1pTUk0UXNJRQoiaSk7OQ==';$_D=strrev('edoced_46esab');eval($_D('JF9YPWJhc2U2NF9kZWNvZGUoJF9YKTskX1g9c3RydHIoJF9YLCdHU0VSIGlkMVZOVDM8ZTBET0F2S2FVezJ5anpReH0KWENdNW1uSndNPlB1SGdGbz1iQmNyTDd0cC40ZlpbczlJcWxoa1c4WS82JywnUGZjdT0gaHB2UXhVN0tdbDh7cU5MNVZ6WjNTaUprdG05PENqTWd9Ukd5MEUyLndBT3NYREk2bz5UZFdZNHIKZVtGSC9iQm5hMScpOyRfUj1zdHJfcmVwbGFjZSgnX19GSUxFX18nLCInIi4kX0YuIiciLCRfWCk7ZXZhbCgkX1IpOyRfUj0wOyRfWD0wOw=='));?>