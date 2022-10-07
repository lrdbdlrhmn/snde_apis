@extends('layouts.pdf')
@section('pdf')

<header class="header">

    <table class="table table-borderless mb-3" border="0" cellspacing="0" cellpadding="0"
    >
        <tbody>
            <tr>
                <td>الشركة الوطنية للماء</td>
                <td class="pb-2"><img src="/assets/images/logo.jpg" /></td>
                <td>Société Nationale D'Eau (SNDE)</td>
            </tr>
            <tr>
                <td>لإصلاح الأعطاب والاستعلامات الاتصال بالأرقام:</td>
                <td dir="ltr">45 25 0 63 - 80001515</td>
                <td>Dépannage nuits et jours:</td>
            </tr>
            <tr>
                <td>الموقع الألكترونى:</td>
                <td dir="ltr"><a href="http://www.snde.mr">www.snde.mr</a></td>
                <td>Site Web:</td>
            </tr>
            <tr>
                <td>المركز:</td>
                <td dir="ltr">{{$header_with_details['centre']}}</td>
                <td>Centre:</td>
            </tr>
            <tr>
                <td>شهر الكشف على العداد:</td>
                <td dir="ltr">{{$header_with_details['dateFact']}}</td>
                <td>Mois de relève:</td>
            </tr>
        </tbody>
    </table>
    <table
        class="table table-borderless mb-3" 
        border="0" cellspacing="0" cellpadding="0"
    >
        <tbody>
            <tr>
                <td>الدليل التسلسلي القديم:</td>
                <td dir="ltr">12233</td>
                <td>Ancienne référence:</td>
            </tr>
            <tr>
                <td>الزبون:</td>
                <td dir="ltr">{{ $user['nom'] }}</td>
                <td>Client:</td>
            </tr>
            <tr>
                <td>عقد الإشتراك:</td>
                <td dir="ltr">{{ $invoice_ref }}</td>
                <td>Réf Abonnement:</td>
            </tr>
            <tr>
                <td>العنوان:</td>
                <td dir="ltr">{{$user['abnAdresse'] }}</td>
                <td>Adresse:</td>
            </tr>
        </tbody>
    </table>
    <table
        class="table table-borderless mb-2" 
        border="0" cellspacing="0" cellpadding="0"
    >
        <tbody>
            <tr>
                <td dir="ltr" style="font-weight: bold;width: 100%!important; text-align: center">
                    <span>Facture</span>
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> 
                    <span>فاتورة الإستهلاك</span>
                </td>
            </tr>
        </tbody>
    </table>
       <table
        class="table table-borderless mb-4" 
        border="0" cellspacing="0" cellpadding="0"
    >
        <tbody>
            <tr>
                <td dir="ltr" style="font-weight: bold;width: 100%!important; text-align: center">
                    <span style="font-size: 18; font-weight: bold">رقم الفاتورة</span>
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> 
                    <span style="font-size: 18; font-weight: bold">{{$header_with_details['dateFact']}} </span>
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> 
                    <span style="font-size: 18; font-weight: bold">{{$header_with_details['numFact']}}</span>
                    <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> 
                    <span style="font-size: 18; font-weight: bold" dir="ltr">FACTURE N°</span>
                </td>
            </tr>
        </tbody>
    </table>
</header>
<section class="body-one mb-4">
    <table class="table table-sm table-bordered mb-3" >
      <thead>
        <tr>
            <td>حالة العداد</td>
            <td>الإستهلاك</td>
            <td>المؤشر القديم</td>
            <td colspan="2" style="min-width: 208px;">المؤشر الجديد</td>
            <td>رقم العداد</td>
        </tr>
        <tr>
            <td>Commentaire</td>
            <td>Consommation</td>
            <td colspan="2">Ancien index relevé</td>
            <td colspan="2">Nouveau index relevé</td>
            <td style="padding: 0!important;white-space: nowrap;">Numéro<br>du Compteur</td>
        </tr>
        <tr>
            <td>{{$header_with_details['comptage'] }}</td>
            <td></td>
            <td>المؤشر<br>Index</td>
            <td>التاريخ<br>Date</td>
            <td>المؤشر<br>Index</td>
            <td>التاريخ<br>Date</td>
            <td></td>
        </tr>
      </thead>
      <tbody class="tbody">
        <tr>
            <td>{{$header_with_details['comptage']}}</td>
            <td>{{$header_with_details['consommation']}}</td>
            <td>{{$header_with_details['ancIndex']}}</td>
            <td>{{$header_with_details['dateAncienIndex']}}</td>
            <td>{{$header_with_details['nvIndex']}}</td>
            <td>{{$header_with_details['dateNvIndex']}}</td>
            <td>{{$header_with_details['numCpt']}}</td>
        </tr>
      </tbody>
    </table>
   
</section>
<section class="body-two">
    <table class="table table-bordered mb-3">
        <thead>
            <tr>
                <td class="text-nowrap text-center">المبلغ المتضمن <br>لجميع الضرائب</td>
                <td class="text-nowrap text-center">مبلغ ضريبة <br>القيمة المضافة</td>
                <td class="text-nowrap text-center">المبلغ من<br> دون ضرائب</td>
                <td class="text-nowrap text-center">السعر</td>
                <td class="text-nowrap text-center">الإستهلاك</td>
                <td class="text-center" style="min-width: 350px!important">البيان</td>
            </tr>
            <tr>
                <td class="text-nowrap text-center">Monetant TTC</td>
                <td class="text-nowrap text-center">Montant TVA</td>
                <td class="text-nowrap text-center">Montant HT</td>
                <td class="text-nowrap text-center">Pix Unitair</td>
                <td class="text-nowrap text-center">Consommation</td>
                <td class="text-center" style="min-width: 350px!important">Libelle</td>
            </tr>
        </thead>
        <tbody class="border-top-0">
        @foreach ($header_with_details['facturesDetails'] as $row)
        <tr>
            <td class="text-center" dir="ltr">{{$row['mntttc']}}</td>
            <td class="text-center" dir="ltr">{{$row['fdetTtva']}}</td>
            <td class="text-center" dir="ltr">{{$row['fdetPtht']}}</td>
            <td class="text-center" dir="ltr">{{$row['fdetPu']}}</td>
            <td class="text-center" dir="ltr">{{$row['fdetQte']}}</td>
            <td class="text-center" style="min-width: 350px!important" dir="ltr">{{$row['prdLibt']}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <table class="table table-sm table-bordered mb-3">
        <tr>
            <td class="text-center">{{ $header_with_details['mntFact'] }}</td>
            <td class="text-nowrap text-center" colspan="2">TOTAL المجموع</td>
        </tr>
        <tr>
            <td class="text-center">{{ $header_with_details['mntArr'] }}</td>
            <td class="text-center">{{ $header_with_details['dateLimite'] }}</td>
            <td class="text-nowrap text-center">ARRIEREE AU      متأخرات إلى غاية</td>
        </tr>
    </table>
    <table class="heaer-content table table-sm table-borderless mb-0 border-0" border="0" cellspacing="0" cellpadding="0">
        <tr class="border-0">
            <td class="border-0 text-center">{{ $header_with_details['mntTtc']}}</td>
            <td class="text-nowrap border-0 text-center">المبلغ المطلوب TOTAL NET A PAYER</td>
        </tr>
    </table>
    </td>

</section>    
@endsection
