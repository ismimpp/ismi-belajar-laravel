     
    <form action="isi-pengaduan" method="POST" enctype="multipart/form-data">

        
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Isi Pengaduan</label>
            <textarea class="form-control" rows="3" name="isi_laporan"></textarea>
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label" >Foto Bukti</label>
            <input class="form-control" type="file" id="formFile" name="foto">
        </div>
        <button type="submit" class="btn btn-primary">Buat</button>
    </form>    
