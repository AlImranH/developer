<footer id="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="copyright">&copy; {{ Carbon\Carbon::now()->format('Y') }} Developer</div>
            </div>
            <div class="col-sm-6">
                <div class="designed-by">Designed By <a href="{{ route('index') }}" target="_blank">Developer</a></div>
            </div>
        </div>
    </div>
</footer>	<!-- site-footer -->