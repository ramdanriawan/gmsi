package main

import (

	config "skyshi.com/src/config"
	route "skyshi.com/src/routes"

	"github.com/gin-gonic/gin"
)

func main() {
	r := gin.Default()

	// konfigurasi database
	db := config.DB()

	route.Api(r, db)
	
	// port akan berjalan di 3030
	r.Run(":3030")
}
