<footer>
    <div class="fixed bottom-0 left-0 right-0 md:flex justify-center text-xs space-x-4 p-2 f-roboto animate__animated animate__fadeInUp @if($lightmode) bg-white text-gray-800 border-t-gray-200 border-t @else bg-gray-800 text-gray-100 @endif">
        <div class="text-center">
            © abas architects <span id="datetime"></span> / All rights reserved
        </div>
        <script>
            var dt = new Date();
            document.getElementById("datetime").innerHTML = dt.getFullYear();
        </script>
        <div class="hidden md:inline material-icons self-center" style="font-size: 6px;">
            fiber_manual_record
        </div>
        <div class="hidden md:inline">Uniting Hearts, Words, And Deeds</div>
        
    </div>
</footer>