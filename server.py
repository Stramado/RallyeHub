from http.server import BaseHTTPRequestHandler, HTTPServer

HOST = "127.0.0.1"
PORT = 80

class RequestHandler(BaseHTTPRequestHandler):
    """Serv a HTTP Server
    Allow the queries for static files and search for the php files to display
    """
    MIMETYPES = {
        "html": "text/html",
        "css": "text/css",
        "png": "image/png",
        "jpg": "image/jpeg",
        "webp": "image/webp",
        "ico": "image/vnd.microsoft.icon",
        "gif": "image/gif",
        "json": "application/json",
        "js": "application/javascript"
    }

    def do_GET(self):
        """Handle the GET requests"""
        # HTML pages
        if self.path == "/":
            self.path = "/index.php"
            try:
                fileContent = open(f"./src/php{self.path}").read()
                self.send_response(200)
                self.send_header("Content-Type", self.MIMETYPES["html"])
                self.end_headers()
                self.wfile.write(bytes(fileContent, "utf-8"))
            except Exception as e:
                print(e)
                self.send_error(404)
        elif self.path == "/watch":
            try:
                fileContent = open(f"./src/php{self.path}.php").read()
                self.send_response(200)
                self.send_header("Content-Type", self.MIMETYPES["html"])
                self.end_headers()
                self.wfile.write(bytes(fileContent, "utf-8"))
            except Exception as e:
                print(e)
                self.send_error(404) 
        elif self.path.startswith("/static"):
            # Static files
            try:
                fileContent = open(f".{self.path}", "rb").read()
                self.send_response(200)
                # Return a different MIME type dependly of the file searched
                match self.path:
                    case ".css":
                        self.send_header("Content-Type",  self.MIMETYPES["css"])
                    case ".png":
                        self.send_header("Content-Type",  self.MIMETYPES["png"])
                    case ".jpg":
                        self.send_header("Content-Type",  self.MIMETYPES["jpg"])
                    case ".jpeg":
                        self.send_header("Content-Type",  self.MIMETYPES["jpg"])
                    case ".webp":
                        self.send_header("Content-Type",  self.MIMETYPES["webp"])
                    case ".ico":
                        self.send_header("Content-Type",  self.MIMETYPES["ico"])
                    case ".gif":
                        self.send_header("Content-Type",  self.MIMETYPES["gif"])

                self.end_headers()
                self.wfile.write(fileContent)
            except IOError as notFound:
                print(f"404 - Cannot find file {self.path}")
                print("Error :", notFound)
                self.send_error(404) 
            except Exception as e:
                print("An error as occured :", e)
                self.send_error(500)
        
        
if __name__ == "__main__":
    print(f"Starting server at http://{HOST}:{PORT}")
    server = HTTPServer((HOST, PORT), RequestHandler)
    server.serve_forever()