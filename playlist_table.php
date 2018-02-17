<!DOCTYPE html>
<html lang="fr" >

<head>
  <meta charset="UTF-8">
  <title>Gérez vos playlists !</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
  
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>

    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/playlist_table.css">
      
  
</head>

<body>

<div class="wave-container">
    <div class="wave -one"></div>
    <div class="wave -two"></div>
    <div class="wave -three"></div>
</div>

<h1>Gérez vos playlists
  <small>Keep this way bruh...</small>
</h1>

  <div class="container">
    <div class="row">
    <p></p>
<p> </p>
  
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Panneau de configuration</h3>
                  </div>
                  <div class="col col-xs-6 text-right">

                  
                    <button type="button" class="btn btn-sm btn-primary btn-create" onclick="location.href='form_playlist.php';" >Créer une nouvelle playlist</button>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th><em class="fa fa-cog"></em></th>
                        <th class="hidden-xs">Id</th>
                        <th class="col-md-2">Playlist</th>
                        <th class="col-md-2">Image</th>
                        <th class="hidden-xs">Taille</th>
                    </tr> 
                  </thead>
                  <tbody>
                          <tr>
                            <td align="center">
                              <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                              <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                            </td>
                            <td class="hidden-xs">1</td>
                            <td class="col-md-2">Playlist</td>
                            <td class="col-md-2">Image</td>
                            <td class="hidden-xs">Taille</td>
                            
                          </tr>
                          <tr>
                            <td align="center">
                              <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                              <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                            </td>
                            <td class="hidden-xs">1</td>
                            <td class="col-md-2">Playlist</td>
                            <td class="col-md-2">Image</td>
                            <td class="hidden-xs">Taille</td>
                            
                            
                          </tr>
                          <tr>
                            <td align="center">
                              <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                              <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                            </td>
                            <td class="hidden-xs">1</td>
                            <td class="col-md-2">Playlist</td>
                            <td class="col-md-2">Image</td>
                            <td class="hidden-xs">Taille</td>
                            
                            
                          </tr>
                          <tr>
                            <td align="center">
                              <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                              <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                            </td>
                            <td class="hidden-xs">1</td>
                            <td class="col-md-2">Playlist</td>
                            <td class="col-md-2">Image</td>
                            <td class="hidden-xs">Taille</td>
                            
                            
                          </tr>
                          <tr>
                            <td align="center">
                              <a class="btn btn-default"><em class="fa fa-pencil"></em></a>
                              <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
                            </td>
                            <td class="hidden-xs">1</td>
                            <td class="col-md-2">Playlist</td>
                            <td class="col-md-2">Image</td>
                            <td class="hidden-xs">Taille</td>
                            
                            
                          </tr>
                        </tbody>
                </table>
            
              </div>
              <div class="panel-footer">
                <div class="row">
                  <div class="col col-xs-4">Page 1 à 5
                  </div>
                  <div class="col col-xs-8">
                    <ul class="pagination hidden-xs pull-right">
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                    </ul>
                    <ul class="pagination visible-xs pull-right">
                        <li><a href="#">«</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

</div></div>
</div>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>

  

</body>

</html>
