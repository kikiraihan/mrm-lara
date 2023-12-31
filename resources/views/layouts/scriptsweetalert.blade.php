{{-- jalankan sweetalert setelah mentriger event livewire --}}
{{-- kenpa disini? karena harus setelah meload livewirescript --}}

{{-- <script>
    Swal.fire({
    title: 'Error!',
    text: 'Do you want to continue',
    icon: 'error',
    confirmButtonText: 'Cool'
  })
</script> --}}

<script>

    window.livewire.on('swalMessage', info => {
        Swal.fire({
            toast: true,
            position: 'center',
            timer: 1000,
            showConfirmButton: false,
            onOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            },
            icon: 'info',
            title: 'Pesan',
            text: info,
        });
        //$('#modalInput').modal('hide');
    })

    window.livewire.on('swalMessageError', info => {
        Swal.fire({
            toast: true,
            position: 'center',
            showConfirmButton: false,
            onOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            },
            icon: 'warning',
            title: 'Pesan error',
            text: info,
        });
        //$('#modalInput').modal('hide');
    })

    window.livewire.on('swalMessageErrorWithTimer', info => {
        Swal.fire({
            toast: true,
            position: 'center',
            showConfirmButton: false,
            timer: info.length*70,
            timerProgressBar: true,
            onOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            },
            icon: 'warning',
            title: 'Pesan error',
            text: info,
        });
        //$('#modalInput').modal('hide');
    })
    
    window.livewire.on('swalAdded', counter => {
        Swal.fire({
            toast: true,
            position: 'top',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            onOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            },
            icon: 'success',
            title: 'Berhasil',
            text: 'berhasil menambahkan data!',
        });
        //$('#modalInput').modal('hide');
    })
    
    window.livewire.on('swalUpdated', () => {
        Swal.fire({
            toast: true,
            position: 'top',
            showConfirmButton: false,
            timer: 2000,
            //timerProgressBar: true,
            onOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            },
            icon: 'success',
            title: 'Berhasil',
            text: 'data telah diubah!',
            confirmButtonText: 'Oke',
        });
        //dropUpOpen=false;
        //$('#modalInput').modal('hide');
    })

    window.livewire.on('swalDeleted', () => {
        Swal.fire({
            icon: 'success',
            title: 'Terhapus!',
            text: 'data telah dihapus.',
            timer: 1000,
            timerProgressBar: true,
            showConfirmButton: false,
        })
    })
    
    window.livewire.on('swalToDeleted', (tujuan, idhapus) => {
        Swal.fire({
            title: 'Anda yakin?',
            text: "Anda akan menghapus data tersebut!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.value) {
                
                window.livewire.emit(tujuan, idhapus);
                
                // Swal.fire(
                // 'Terhapus!',
                // 'data telah dihapus.',
                // 'success'
                // )
                
            }
        });
    })
    
    window.livewire.on('swalToDeletedWithMessage', (tujuan, idhapus,message) => {
        Swal.fire({
            title: 'Anda yakin?',
            text: message,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.value) {
                
                window.livewire.emit(tujuan, idhapus);
                
                // Swal.fire(
                // 'Terhapus!',
                // 'data telah dihapus.',
                // 'success'
                // )
                
            }
        });
    })
    
    
    
    window.livewire.on('tutupModal', () => {
        $('#modalInput').modal('hide');
    })
    
    
    window.livewire.on('swalAndaYakin', (tujuan, idModel, pesan) => {
        Swal.fire({
            title: 'Anda yakin?',
            text: pesan,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Tidak',
            confirmButtonText: 'Ya!'
        }).then((result) => {
            if (result.value) {
                
                window.livewire.emit(tujuan, idModel);
                
                Swal.fire(
                'Berhasil!',
                'data telah diupdate.',
                'success'
                )
                
            }
        });
    })
    
    window.livewire.on('swalAndaYakinCeklis', (tujuan, pesan) => {
        Swal.fire({
            title: 'Anda yakin?',
            text: pesan,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Tidak',
            confirmButtonText: 'Ya!'
        }).then((result) => {
            if (result.value) {
                
                window.livewire.emit(tujuan);
                
                Swal.fire(
                'Berhasil!',
                'data telah diupdate.',
                'success'
                )
                
            }
        });
    })
    


    // khusus
    window.livewire.on('swalShowImage', (urlgambar) => {
        Swal.fire({
            // title: 'Sweet!',
            html: '<a href="'+urlgambar+'" class="text-xs text-blue-500"> URL: '+urlgambar+'</a>',
            imageUrl: urlgambar,
            // imageWidth: 400,
            // imageHeight: 200,
            showConfirmButton: false,
            imageAlt: 'Custom image',
            confirmButtonColor: '#d33',
            confirmButtonText: 'Tutup!'
        })
    })

    window.livewire.on('swalShowContent', (title,body,photo,url) => {
        Swal.fire({
            title: title,
            html: '<div class="text-justify">'+body+'</div>'+'<div class="mt-8"><a href="'+url+'">'+url+'</a></div>',
            imageUrl: photo,
            showConfirmButton: false,
        })
    })

    


    

</script>
