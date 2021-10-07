<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Invoice</title>
    {{-- <link rel="stylesheet" href="/style.css" media="all" /> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="{{ asset('/style.css') }}" rel="stylesheet" type="text/css" />

  </head>
  <body>
    <section id="invoicepdf">
    <header class="clearfix">
      <div id="logo">
        <img src="/sj-i.jpg">
      </div>
      <h1> {{ $invoices->invoice_no }}</h1>
      <div id="company" class="clearfix">
        <div>Company Name</div>
        <div>SJ-Solution,<br /> 296-B Qazafi Park, GR Lahore</div>
        
        <div><a href="sj-solutions.com">Sj_solutions.com</a></div>
      </div>
      <div id="project">
        <div><span>PROJECT NAME :</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$invoices->projects ?  $invoices->projects->name : 'N/A' }} </div>
        <div><span>CLIENT NAME :</span>&nbsp;&nbsp;&nbsp;&nbsp; {{ $invoices->cli ? $invoices->cli->name : 'N/A' }}</div>
        <div><span>ADDRESS :</span> Lahore</div>
        <div><span>EMAIL :</span>{{  $invoices->cli->email }}</></div>
        <div><span>Issue_DATE :</span> {{  $invoices->issue_date }}</div>
        <div><span>DUE DATE :</span> {{ $invoices->due_date }}</div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th >ID</th>
            <th>Name</th>
            <th>Project-Name</th>
            <th>Status</th>
            <th>TOTAL</th> 
          </tr>
        </thead>
        <tbody class="text-left">
            <tr>
             <td>
                {{ $invoices->id }}
             </td>
             <td>
                {{ $invoices->name }}
             </td>
             <td>
                {{$invoices->projects ?  $invoices->projects->name : 'N/A' }}
                
             </td>
             <td>
             {{ $invoices->status }}
             </td>
                <td>
                {{ $invoices->total_bill }}$
               </td>
             </tr>
            
                <tr>
                    <td colspan="4"><b>TAX : </b></td>
                    <td class="total">{{ $invoices->tax }}$
                    </td>
                    
                </tr>

                {{-- @dd($invoices->total_bill , $invoices->tax) --}}
                
                <tr>
                    <td colspan="4" class="grand total"><b>GRAND TOTAL :</b></td>
                    <td class="grand total">{{ ($invoices->total_bill + $invoices->tax) }}$</td>
                </tr>

            
    </tr>
    </tbody>
      </table>
      <div id="notices">
          <div><b>Notice:</b></div>
          <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
        </div>

        <footer >
          Invoice was created on a computer and is valid without the signature and seal.
        </footer>
    </main>
    
  </section>
    <input type="button" id="btnExport" class="btn btn-primary" value="Print" onclick="Export()" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script type="text/javascript">
        function Export() {
            html2canvas(document.getElementById('invoicepdf'), {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("Invoice.pdf");
                }
            });
        }
    </script>
  </body>
</html>