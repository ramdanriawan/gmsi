package activityGroup

// untuk melakukan pengupdate data
type ActivityGroupUpdateDto struct {
	Id    int64  `json:"id" `
	Title string `json:"title" validate:"required,max=100,min=1"`
	Email string `json:"email"`
}
